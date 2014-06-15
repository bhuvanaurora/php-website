<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

    <div id="topic">
        <h2 id="section1">Divisibility</h2>
    </div>
    <div class="subject" style="width:40%">
        <p>
        <a href="../homepage.php">Home</a> |
        <a href="CAT_page.php">CAT</a> |
        <a href="CAT_QA.php">Number Systems</a>
        </p>
    </div>

    <div id="container">

        <div class="row row-offcanvas row-offcanvas-left">
        
             <div class="hr"><hr /></div> 


       <p><ul><li>      All even numbers are divisible by 2, i.e. if the last digit or digit at one<int>'</int>s place is divisible by 2 the number is divisible by 2.
</li>
<li>If last two digits are divisible by 4, the number is divisible by 4 (2<sup>2</sup>).</li>
<li>If last three digits are divisible by 8, the number is divisible by 8 (2<sup>3</sup>).</li>
<li>If last four digits are divisible by 16, the number is divisible by 16 (2<sup>4</sup>) and so on.</li>
<li>If the sum of all the digits of a number is divisible by 3, the number is divisible by 3.</li>
<li>If the sum of all the digits is divisible by 9, the number is divisible by 9.</li>
<li>If a number is divisible by 2 and 3, it is divisible by 6 (2 X 3).</li>
<li>If the last digit of a number is 5 or 0, the number is divisible by 5.</li>
</ul>
<strong>Divisibility rule for 7:</strong>
<br>Step 1: Double the last digit and subtract from the truncated number.
<br>Step 2: Is the final number divisible by 7? If yes, the initial number was divisible by 7. If no, then the number wasn<int>'</int>t divisible by 7.
<br>Not sure? Go to step 1.
<br>
<br><strong>Divisibility rule for 11:</strong>
<br>Step 1: Subtract the last digit from the truncated number.
<br>Step 2: Is the final number divisible by 11? If yes, the initial number is divisible by 11. If no, then the number isn<int>'</int>t divisible by 11.
<br>Not sure? Go to step 1.
<br>
<br><strong>Divisibility rule for 13:</strong>
<br>Step 1: Add four times the last digit to the truncated number.
<br>Step 2: Is the final number divisible by 13? If yes, the initial number was divisible by 13. If no, then the number wasn<int>'</int>t divisible by 13.
<br>Not sure? Go to step 1.
<br>
<br><strong>Divisibility rule for 17:</strong>
<br>Step 1: Subtract five times the last digit to the truncated number.
<br>Step 2: Is the final number divisible by 17? If yes, the initial number was divisible by 17. If no, then the number wasn<int>'</int>t divisible by 17.
<br>Not sure? Go to step 1.
<br>
<br><strong>Divisibility rule for 19:</strong>
<br>Step 1: Add two times the last digit to the truncated number.
<br>Step 2: Is the final number divisible by 19? If yes, the initial number was divisible by 19. If no, then the number wasn<int>'</int>t divisible by 19.
<br>Not sure? Go to step 1.
<br>
<br><strong><i>Cyclicity</i></strong>
<br>
<br>CCyclicity is how a pattern repeats itself under certain conditions. Look at the example below to get a better understanding of cyclity in this respect.</p>
<p>The cyclicity chart of 2 is:</p>
<p>2<sup>1 </sup>=2<br />
2<sup>2</sup> =4<br />
2<sup>3 </sup>=8<br />
2<sup>4</sup>=16<br />
2<sup>5</sup>=32</p>
<p>Have a close look at the above. You would see that as 2 is multiplied everytime with itself, the last digit changes. 
On the 4<sup>th</sup> multiplication, 2<sup>5</sup> has the same unit's digit as 2<sup>1</sup>.
 This shows us the cyclicity of 2 is 4, that is after every fourth multiplication, the unit's digit will be two.</p>
<p>Now let us use the concept of cyclicity to calculate the Unit digit of a number.</p>
<p>What is the unit digit of the expression  4<sup>45</sup>?<br />
Now we have two methods to solve this but we choose the best way to solve it i.e. through cyclicity</p>
<p>We know the cyclicity of 4 is 2</p>
<p>Have a look:<br />
4<sup>1</sup> =4<br />
4<sup>2 </sup>=16<br />
4<sup>3 </sup>=64</p>
<p>Here the 4 comes again at the end when the 4 is raised to the power 3 so it is clear that the cyclicity of 4 is 2. 
Now with the cyclicity number i.e. with 2 divide the given power i.e. 45/2 to get the remainder 1 so this means
 for number 4<sup>44</sup> the unit's digit is the same as for 4<sup>2</sup>. Hence, the unit's digit for 4<sup>45</sup> is 4</p>
<p>So the unit digit in this case is 4.</p>
<p>(Questions)</p>
<p><strong>The digit in the unit place of the number 7<sup>95</sup> X 3<sup>58</sup> is</strong><br />
A.  7<br />
B.  2<br />
C.  6<br />
D.  4</p>
<p><strong>Solution</strong><br />
The Cyclicity table for 7 is as follows:<br />
7<sup>1 </sup>=7<br />
7<sup>2 </sup>=49<br />
7<sup>3</sup> = 343<br />
7<sup>4</sup> = 2401</p>
<p>Let<int>'</int>s divide 95 by 4: the remainder is 3.<br />
Thus, the last digit of 7<sup>95</sup> is equals to the last digit of 7<sup>3</sup> i.e. 3.<br />
The Cyclicity table for 3 is as follows:<br />
3<sup>1</sup> =3<br />
3<sup>2</sup> =9<br />
3<sup>3 </sup>= 27<br />
3<sup>4 </sup>= 81<br />
3<sup>5 </sup>= 243</p>
<p>Let<int>'</int>s divide 58 by 4, the remainder is 2. Hence the last digit will be 9.</p>
<p>Therefore, unit&#8217;s digit of (7<sup>95</sup> X 3<sup>58</sup>) is unit&#8217;s digit of product of digit at unit&#8217;s place of 7<sup>95</sup> and 3<sup>58</sup> = 3 * 9 = 27. Hence option 1 is the answer.</p>
</p>
        </div>
    </div>

    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_HCF-LCM.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Remainders.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>