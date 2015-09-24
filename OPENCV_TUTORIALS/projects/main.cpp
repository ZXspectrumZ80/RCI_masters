#include <iostream>
#include <opencv2/highgui/highgui.hpp>
using namespace std;
using namespace cv;

int main(int argc, char **argv)
{
Mat im = imread(argv[1]);
namedWindow("Hello");
imshow("Hello", im);

       cout << "Press 'q' to quit..." << endl;
       while(1)
          {
                  if(char(waitKey(1)) == 'q') break;
          }
          destroyAllWindows();
          return 0;
}
