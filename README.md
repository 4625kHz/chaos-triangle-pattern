# chaos-triangle-pattern
This script draws a non-random pattern from totally random inputs.

1) The 3 apex points of an equilateral triangle of side length 1,000px are defined as x,y coordinates and the point is plotted.

2) The x,y coordinates of a starting point are chosen, either inside or outside of the triangle, and the point is plotted.

3) The x,y coordinates of a new point are defined as being mid-way between the previous point and one of the triangle apex points, chosen at random. This point is this plotted.

4) This process is repeated for 1 million iterations.

5) A plot of all generated points is outputted in a web browser as a PNG file.

6) The pattern created is non-random.
