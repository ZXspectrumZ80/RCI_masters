//============================================================================
// Name        : CimgTest.cpp
// Author      : 
// Version     :
// Copyright   : Your copyright notice
// Description : Hello World in C++, Ansi-style
//============================================================================

#include <iostream>
#include <sstream>
#include <list>
#include <vector>
#include <cmath>
#include "CImg.h"

using namespace std;
using namespace cimg_library;

/// crude color RGB class, can be read as float array via rgb()
struct Color {
    float r;
    float g;
    float b;
    const float* rgb() const {
        return &this->r;
    }
    ;
};
// some predefined colors for convenience
const Color black = { 0.0f, 0.0f, 0.0f };
// TODO  - DONE fill in colors yellow and white
const Color white = { 1.0f, 1.0f, 1.0f };
const Color yellow = { 1.0f, 1.0f, 0.0f };
const Color red = { 1.0f, 0.0f, 0.0f };
const Color green = { 0.0f, 1.0f, 0.0f };
const Color blue = { 0.0f, 0.0f, 1.0f };
const Color orange = { 1.0f, 0.5f, 0.0f };

struct Point {
    int x;
    int y;
};

typedef CImg<unsigned char> ImgType;

/**
 * Canvas to paint on
 *
 * Class provides access to a singleton object, which is directly conntected
 * to the main window of the application.
 * It has to be manually created and destroyed!
 * It is also necessary to explicitly call paint if anything is to be seen.
 */
class Canvas: public ImgType {
public:
    /// initializes the canvas of the application
    static void create( int width = 800,
            int height = 800,
            int a = 3,
            int b = 1 ) {
        if ( singleton == nullptr )
            singleton = new Canvas( width, height, a, b );
    }
    ;
    /// get access to the canvas of the application
    static Canvas* get() {
        return singleton;
    }
    ;
    /// draw the objects on the canvas
    static void paint() {
        singleton->display();
    }
    ;
    /// free the resources allocated by the canvas
    static void destroy() {
        delete singleton;
        singleton = nullptr;
    }
    ;

private:
    /// private constructor, use create and then get to obtain access to singleton
    Canvas( int width, int height, int a, int b ) :
            ImgType( width, height, a, b ) {
    }
    ;
    /// private destructor, use destroy to free space afterwards
    virtual ~Canvas() {
    }
    ;
    static Canvas* singleton;
};
Canvas* Canvas::singleton = nullptr;

/**
 * Abstract base class for 2-D geometrical objects
 *
 * Implement the virtual methods to support a new type of shape.
 */
class Shape2d {
public:
    /// constructor of the base class
    Shape2d( Color color ) :
            _color( color ) {
    }
    ;
    /// the set of virtual functions to implement for subclasses
    virtual ~Shape2d() {
    }
    ;
    virtual Point getCenterOfMass() const = 0;
    virtual double getArea() const = 0;
    virtual void draw() const = 0;
    virtual Shape2d* clone() const = 0;
    virtual void scale( double factor ) = 0;
    virtual void translate( int x, int y ) = 0;
    /// all shapes have their color in common
    void setColor( Color c ) {
        _color = c;
    }
    ;

protected:
    /// the render color of the shape
    Color _color;
};

/**
 * Polygon class (for non-self-overlapping polygons) inheriting Shape2d
 *
 * This class serves as an example and can be overwritten with specialized
 * and more efficient implementations for say triangles and squares.
 * Circles and ellipses should however not inherit from it and can be
 * implemented much more easily.
 */
class Polygon: public Shape2d {
public:

    Polygon( const std::vector<Point>& corners, Color color ) :
            Shape2d( color ), _corners( corners ), _centerOfMass( { 0, 0 } ), _area(
                    0.0 ) {
        // compute the area of the polygon and its center of mass
        for ( size_t i = 0lu; i <= _corners.size(); ++i ) {
            int value = _corners[i].x * _corners[( i + 1 ) % _corners.size()].y
                    - _corners[i].y * _corners[( i + 1 ) % _corners.size()].x;
            _area += static_cast<double>( value );
            _centerOfMass.x += ( _corners[i].x
                    + _corners[( i + 1 ) % _corners.size()].x ) * value;
            _centerOfMass.y += ( _corners[i].y
                    + _corners[( i + 1 ) % _corners.size()].y ) * value;
        }
        _area *= 0.5;
        _area = std::fabs( _area );
        _centerOfMass.x = abs(
                static_cast<int>( static_cast<double>( _centerOfMass.x )
                        / ( 6.0 * _area ) ) );
        _centerOfMass.y = abs(
                static_cast<int>( static_cast<double>( _centerOfMass.y )
                        / ( 6.0 * _area ) ) );
    }

    virtual ~Polygon() {
    }
    ;
    virtual Point getCenterOfMass() const {
        return _centerOfMass;
    }
    ;
    virtual double getArea() const {
        return _area;
    }
    ;
    virtual void draw() const {
        // we need to copy the points again for drawing, duplicating
        // the first point as last point to close the polygon
        CImg<int> points( _corners.size() + 1, 2 );
        for ( size_t i = 0; i < _corners.size(); ++i ) {
            points( i, 0 ) = _corners[i].x;
            points( i, 1 ) = _corners[i].y;
        }
        points( _corners.size(), 0 ) = _corners[0].x;
        points( _corners.size(), 1 ) = _corners[0].y;
        Canvas::get()->draw_polygon( points, _color.rgb(), 1.0f );
    }
    ;

    virtual Shape2d* clone() const {
        return new Polygon( _corners, _color );
    }
    ;

    virtual void scale( double factor ) {
        for ( auto& p : _corners ) {
            // center around origin
            p.x -= _centerOfMass.x;
            p.y -= _centerOfMass.y;
            // scale
            p.x = static_cast<int>( static_cast<double>( p.x ) * factor );
            p.y = static_cast<int>( static_cast<double>( p.y ) * factor );
            // translate back
            p.x += _centerOfMass.x;
            p.y += _centerOfMass.y;
        }
    }
    ;

    virtual void translate( int x, int y ) {
        for ( auto& p : _corners ) {
            p.x += x;
            p.y += y;
        }
    }
    ;

protected:
    /// the corner point of the polygon
    std::vector<Point> _corners;
    /// for convenience cache the center of mass, as the formula is rather complex
    Point _centerOfMass;
    /// same for the area
    double _area;
};

// TODO finish the implementation of the circle class
/**
 * Circle class inheriting the Shape2d class
 *
 * Can be directly painted on the canvas, and basic
 * information can be queried
 */
class Circle: public Shape2d {
public:
    Circle( Point center, int radius, Color color ) :
            Shape2d( color ) {
        _radius = radius;
        _center = center;
    }

    virtual ~Circle() {
    }
    ;
    virtual Point getCenterOfMass() const {
        return {_center.x, _center.y}; /* TODO - DONE*/
    }
    ;
    virtual double getArea() const {
        return ( cimg_library::cimg::PI * ( _radius * _radius ) / 4.0 ); /* TODO - DONE */
    }
    ;
    virtual void draw() const {
        // TODO DONE use the canvas' method "draw_circle(int x, int y, int radius, float* color, float alpha=1)"
        Canvas::get()->draw_circle( _center.x, _center.y, _radius, _color.rgb(),
                1 );
    }
    ;
    virtual Shape2d* clone() const {
        return new Circle( { _center.x, _center.y }, _radius, black ); /* TODO */
    }
    ;
    virtual void scale( double factor ) {
        _radius = _radius * factor; /* TODO */
    }
    ;
    virtual void translate( int x, int y ) {
        _center.x = _center.x + x;
        _center.y = _center.y + y; /* TODO */
    }
    ;

protected:
    // TODO add meaningful member variables
    /// store the center of circle, radius and color
    Point _center;
    int _radius;
};

// TODO reuse some of the functions of "Circle" and implement and "Ellpise"
/**
 * Extending the circle by a second "radius" easily leads to an ellipse
 */
class Ellipse: public Circle {
public:
    Ellipse( Point center, int hRadius, int vRadius, float angle, Color color ) :
            Circle( center, hRadius, color ) {
        _vRadius = vRadius;
        _angle = angle;
    }

    virtual ~Ellipse() {
    }

    virtual Point getCenterOfMass() const {
        return {_center.x, _center.y}; /* TODO */
    }

    virtual double getArea() const {
        return (cimg_library::cimg::PI * ( _radius * _vRadius )); /* TODO */
    }

    virtual void draw() const {
        // TODO use the canvas' method "draw_ellipse(int x, int y, int hRadius,
        // int vRadius, float angle, float* color, float alpha=1)"
        Canvas::get()->draw_ellipse( _center.x, _center.y, _radius, _vRadius,
                _angle, _color.rgb(), 1 );
    }

    virtual Shape2d* clone() const {
        return new Ellipse( { _center.x, _center.y }, _radius, _vRadius, _angle,
                black ); /* TODO */
    }

    // TODO think about what really needs to be reimplemented here
    virtual void scale( double factor ) {
        _radius = factor * _radius;
        _vRadius = factor * _vRadius;
    }
    ;


protected:
    // TODO add meaningful member variables
    int _vRadius;
    float _angle;

};

int main( int argc, char **argv ) {
    // create singleton object
    Canvas::create( 800, 800, 1, 3 );

    Point center = { 400, 400 };

    // a list of shapes to draw on the canvas
    std::list<Shape2d*> shapes;

    // yellow circle
    shapes.push_back( new Circle( center, 350, yellow ) );
    // two black ellipses
    shapes.push_back( new Ellipse( center, 90, 40, 90, black ) );
    shapes.back()->translate( -120, -150 );
    shapes.push_back( shapes.back()->clone() );
    shapes.back()->translate( 240, 0 );
    // black rectangles
    int mWidth = 400;
    int mHeight = 140;
    int mTop = 450;
    int mLeft = 400 - mWidth / 2;
    shapes.push_back(
            new Polygon(
                    { { mLeft, mTop + mHeight }, { mLeft + mWidth, mTop
                            + mHeight }, { mLeft + mWidth, mTop },
                            { mLeft, mTop } }, black ) );
    // 2*tCount white rectangles
    int tCount = 6;
    int tWidth = 51;
    int gap = ( mWidth - ( tCount * tWidth ) ) / ( tCount + 1 );
    int tHeight = ( mHeight - 3 * gap ) / 2;
    mLeft += gap;
    mTop += gap;
    shapes.push_back(
            new Polygon(
                    { { mLeft, mTop + tHeight }, { mLeft + tWidth, mTop
                            + tHeight }, { mLeft + tWidth, mTop },
                            { mLeft, mTop } }, white ) );
    // top row
    for ( int i = 1; i < tCount; ++i ) {
        shapes.push_back( shapes.back()->clone() );
        shapes.back()->translate( tWidth + gap, 0 );
    }
    // bottom row
    auto it = shapes.end();
    --it;
    for ( int i = 0; i < tCount; ++i, --it ) {
        shapes.push_back( ( *it )->clone() );
        shapes.back()->translate( 0, tHeight + gap );
    }

    // draw the scene
    for ( auto s : shapes )
        s->draw();
    Canvas::paint();

    // clean up
    // the destructor of the list does not delete heap objects
    for ( auto s : shapes )
        delete s;
    // destroy the singleton
    Canvas::destroy();

    return 0;
}

