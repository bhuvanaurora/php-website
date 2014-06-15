<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

    <div id="topic">
        <h2 id="section1">Factors</h2>
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

       <p>The numbers (natural numbers) that completely dvivide a <i>number</i> are known as the factors of the <i>number</i>. If any number, say P, is completely divisible by another number say Q an exact number of times then P is said to be a multiple of Q and Q is the factor of P.</p>
                <strong>Factors of a number:</strong><br />
The number of factors can be found by following steps:<br />
1. First write down the number in prime factorisation form i.e. in a<sup>p</sup> b<sup>q</sup> c<sup>r </sup> (where a, b, c are prime numbers and the p, q, r are natural numbers as their respective powers.)<br />
2. Number of factors now can be expressed as (p+1)(q+1)(r+1).<br />
3. Number of factors includes 1 and the number itself.<strong></strong></p>
For example: N = 38491200=2<sup>6</sup> 3<sup>7</sup> 5<sup>2</sup><br />
</p>
<p><strong>Step 1:</strong> Prime factorisation: N=38491200=2<sup>6</sup> 3<sup>7</sup> 5<sup>2</sup><br />
Power of 2 as 2<sup>0  </sup>, 2<sup>1</sup>, 2<sup>2 </sup>, 2<sup>3</sup>, 2<sup>4</sup>, 2<sup>5</sup>, 2<sup>6</sup> (6+1 = 7 ways)<br />
Power of 3 as 3<sup>0  </sup>, 3<sup>1</sup>, 3<sup>2 </sup>, 3<sup>3</sup>, 3<sup>4</sup>, 3<sup>5</sup>, 3<sup>6</sup>, 3<sup>7</sup> (7+1 = 8 ways)<br />
Power of 5 as 5<sup>0 </sup>, 5<sup>1</sup>, 5<sup>2 </sup> (2+1 = 3 ways)</p>
<p><strong>Step 2:</strong> Hence, the number of factors is given by (6+1)(7+1)(2+1) = 7 x 8 x  3 = 168<br />
<br />(Questions) <br /><br /><strong>Example 1</strong>: Find the <strong>number of factors</strong> of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup>.<br />
<strong>Solution:</strong> As we can see the above number has 2,3,5,7 which all are prime numbers and they have 4,1,2,2 as their power so the number of factors of the given number are (4+1)(1+1)(2+1)(2+1)= 90</p>
<p><strong>Types of Factors illustrated with Examples </strong><br />
<strong>Even factors</strong>:  <strong>Even factors are the factors of number which are divisible by 2</strong></p>
<p><strong>Example 2</strong>: Find the <strong>number of even factors</strong> of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup>.</p>
<p><strong>Solution</strong>: In this case we have to find number of even factors, an even factor is divisible by 2 or smallest power of 2 as 1 not 0, as in the case of total number of factors. Hence a factor must be 2<sup>(1 or 2 or 3 or 4)</sup>3<sup>(0 or 1 )</sup>5<sup>(0 or 1 or 2)</sup>7<sup>(0 or 1 or 2) </sup><br />
Hence total number of factors = (4)(1 + 1 )(2 + 1)(2 + 1) = 72<br />
<strong>Hence number of even factors of a number N = 2<sup>P</sup>a<sup>Q</sup>b<sup>r</sup>c<sup>s </sup>is = p(q + 1)(r + 1)(s + 1)</strong></p>
<p><strong>Odd factors: Odd factors are those factors which are not divisible by 2</strong></p>
<p><strong>Example 3</strong>: Find the <strong>number of odd factors</strong> of2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup>.<br />
<strong>Solution:</strong>  From Example 1 we have seen that total number of factors of N is 240 and from example 2 total number  of even factors is 180 hence number of odd factors = 90- 72 = 18<br />
<strong>Hence number of odd factors</strong> = Total number of factors &#8211; Number of even factors</p>
<p>Alternate way: Since odd factors should have power of 2 as 0, the odd factors must be<br />
2<sup>(0 )</sup>3<sup>(0 or 1 )</sup>5<sup>(0 or 1or 3)</sup>7<sup>(0 or 1 or 2 )</sup><br />
Total number of odd factors = (1 )(1 + 1)(2 + 1)(2+1) = 18<br />
Hence, number of odd factors of a number N = 2<sup>P</sup>a<sup>Q</sup>b<sup>r</sup>c<sup>s</sup> = (q + 1)(r + 1)(s + 1)</p>
<p><strong>Factors that end with zero :</strong></p>
<p><strong>Example 4</strong>: Find the <strong>number of factors of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup></strong> <strong>that end with 0 </strong>(Or in other words, are divisible by 10)<br />
<strong>Solution:</strong>  If a number is divisible by 10 then it must have minimum power of 2 and 5 as 1.<br />
A factor divisible by 10 must be 2<sup>(1 or 2 or 3 or 4)</sup>3<sup>(0 or 1 )</sup>5<sup>(1 or 2 )</sup>7<sup>(0 or 1 or 2 )</sup><br />
Hence, total number of factors divisible by 10 is = (4)(1 + 1)(2)(2 + 1) = 48</p>
<p><strong>Example 5</strong>: find the number of <strong>factor </strong>of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup>.<strong>that are not divisible by 10</strong>?<br />
<strong>Solution:  </strong>We know that the total number of factors are 90 , out of that 48 are divisible by 10 so the number of factors left which are not divisible by 10 i.e. 90 -48=42</p>
<p><strong>Example 6</strong>: find the number of <strong>factors</strong> of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup>,<strong> which are divisible by 12</strong>?<br />
Since we have to find the number of factors which are divisible by 12, to find this divide the given number by 12 and then find the number of factors of the quotient.<br />
Divide 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>7<sup>2</sup><strong> by 12 ( 2<sup>2</sup>3<sup>1</sup>) = 2<sup>2</sup>  5<sup>2</sup> 7<sup>2 </sup>and its number of factors are 3 x 3 x 3</strong>=27</p>
<p><strong>Perfect square factors: If a number is perfect square then its prime factors must have even powers. </strong></p>
<p><strong>Example 7</strong>: Find the number of factors of 2<sup>4 </sup>3<sup>1</sup>5<sup>2</sup>11<sup>2</sup> that are <strong>perfect square?</strong></p>
<p><strong>Solution:</strong>We know that for a number to be a perfect square, its factor must have the even number of powers. All we need to explore is the even powers of the factors in this case.<br />
<strong>Therefore the perfect square factors can be2 <sup>( o or 2 or 4   )</sup>3<sup>(0 )</sup>5<sup>(0 or 2 )</sup>11<sup>(0 or 2 )</sup></strong><br />
Hence, the total number of factors which are perfect square are 3x1x2x2=12</p>
<p><strong>Perfect cube factors: If a number is a perfect cube, then the power of the prime factors should be divisible by 3. </strong></p>
<p><strong>Example 8:</strong> find the number of factors of  2<sup>9</sup>3<sup>6</sup>5<sup>5</sup>11<sup>8</sup> that <strong>are perfect cube? </strong><br />
<strong>Solution: </strong>If a number is a perfect cube, then the power of the prime factors should be divisible by 3. The possible options are : 2<sup>(0 or 3 or 6 or 9)</sup>3<sup>(0 or 3 or 6)</sup>5<sup>(0 or 3 )</sup>11 <sup>(0 or 3 or 6 )</sup> .<br />
Hence, the total number of factors which are perfect cube 4x3x2x3=72.</p>
<p><strong>Example 9</strong>: How many factors of 2<sup>9</sup>3<sup>6</sup>5<sup>5</sup>11<sup>8</sup> are both <strong>perfect square and perfect cube</strong>?<br />
<strong>Solution: If a number is both perfect square and perfect cube then the powers of prime factors must be divisible by 6</strong>.  Perfect square factor must be  2<sup>(0 or 6)</sup>3<sup>(0 or 6)</sup>5<sup>(0 )</sup>7<sup>(0 or 6)</sup><br />
Hence total number of perfect cube factors are 2 x 2 x 2  = 8</p>
<p><strong>Example 10: </strong>How many factors of2<sup>9</sup>3<sup>6</sup>5<sup>5</sup>11<sup>8</sup> are either perfect squares or perfect cubes but not both? <strong></strong><br />
<strong>Solution:  </strong><br />
Perfect Square (300) ,Perfect Cube (72), both(8)<br />
Hence required number of factors is 292 + 64 = 356</p>
<p><strong>Remember </strong><br />
<strong>If number of factors is odd then the number is a perfect square</strong><br />
<strong>If number of factors is even then number is not a perfect square. </strong><br />
<strong>This is because if number is perfect square then p, q, and r are even and hence (p + 1) (q + 1) and (r+ 1) are odd and so product of these numbers is also an odd number. </strong>
                    </p>
        </div>
    </div>
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_NumberSystems.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_HCF-LCM.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>