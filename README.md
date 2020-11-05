# BerlinClockKata
Hello we are going to do the Berlin Clock Kata, 

for this we will use the following conventions: 

String lamp display:
Y=yellow (ON)

R=red (ON)

O=off (OFF)

example with all lights on  :


  R -> the lamp of the seconds (light up red for second peers and off for odd seconds)  
 YYYY -> line of 5 hour blocks  (a yellow lamp represents 5 hours and O for 0 hour) 
 YYYY -> single hour lines     ( a yellow lamp represents 1 hour and O for 0 hour)
 YYRYYRYYRYY -> line of 5 minute blocks  ( a yellow lamp represents 5 minutes, the lamps are red in position 3, 6 ,9 and also represents 5 minutes, and O for 0 minutes )
 YYYY -> single minute line  (a yellow lamp represents 1 minute and O for 0 minute )





comments :

Unfortunately we had problems with github and we had to do this on a pc each in turn.

We started by writing the simple tests then wrote the minimal code to pass the test then commit and so on, 
then we did the same with the more complex tests and had to refactor to improve the code and 
finally we included the clock as a string and refactor to simplify everything.
