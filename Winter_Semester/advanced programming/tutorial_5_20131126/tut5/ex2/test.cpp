

        /***************************************************************************************
         * compute the net-updates for the vertical edges
         **************************************************************************************/

        for (int i = 1; i < nx+2; i++) {
                for (int j=1; j < ny+1; ++j) {
                        float maxEdgeSpeed;

                        wavePropagationSolver.computeNetUpdates (
                                h[i - 1][j], h[i][j],
                                hu[i - 1][j], hu[i][j],
                                b[i - 1][j], b[i][j],
                                hNetUpdatesLeft[i - 1][j - 1], hNetUpdatesRight[i - 1][j - 1],
                                huNetUpdatesLeft[i - 1][j - 1], huNetUpdatesRight[i - 1][j - 1],
                                maxEdgeSpeed
                        );

                        //update the thread-local maximum wave speed
                        maxWaveSpeed = std::max(maxWaveSpeed, maxEdgeSpeed);
                }
        }

        /***************************************************************************************
         * compute the net-updates for the horizontal edges
         **************************************************************************************/

        for (int i=1; i < nx + 1; i++) {
                for (int j=1; j < ny + 2; j++) {
                        float maxEdgeSpeed;

                        wavePropagationSolver.computeNetUpdates (
                                h[i][j - 1], h[i][j],
                                hv[i][j - 1], hv[i][j],
                                b[i][j - 1], b[i][j],
                                hNetUpdatesBelow[i - 1][j - 1], hNetUpdatesAbove[i - 1][j - 1],
                                hvNetUpdatesBelow[i - 1][j - 1], hvNetUpdatesAbove[i - 1][j - 1],
                                maxEdgeSpeed
                        );

                        //update the maximum wave speed
                        maxWaveSpeed = std::max (maxWaveSpeed, maxEdgeSpeed);
                }
        }


       //update cell averages with the net-updates
        for (int i = 1; i < nx+1; i++) {
                for (int j = 1; j < ny + 1; j++) {
                        h[i][j] -= dt / dx * (hNetUpdatesRight[i - 1][j - 1] + hNetUpdatesLeft[i][j - 1])
                        + dt / dy * (hNetUpdatesAbove[i - 1][j - 1] + hNetUpdatesBelow[i - 1][j]);
                        hu[i][j] -= dt / dx * (huNetUpdatesRight[i - 1][j - 1] + huNetUpdatesLeft[i][j - 1]);
                        hv[i][j] -= dt / dy * (hvNetUpdatesAbove[i - 1][j - 1] + hvNetUpdatesBelow[i - 1][j]);
