<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

    <div id="topic">
        <h2 id="section1">LCM and HCF</h2>
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

       <p><strong>LCM (Least Common Multiple)</strong> </p>
The least common multiple of two or more numbers is the smallest positive number that is a multiple of all the numbers.</p>
<p>Multiples of 3: &#8211;3, 6, 9, 12, 15, 18 ...<br />
Multiples of 4: &#8211;4, 8, 12, 16, 20, 24 ...<br />
so the LCM of 3 and 4 is 12.</p>
LCMs are defined for positive numbers only<br />
<p><strong>PROCESS OF FINDING LCM </strong></p>
<ul>
<li>First step is factorisation</li>
<li>Then, sorting all the distinct factors</li>
<li>And then raising the factor to its highest power</li>
</ul>
<p><strong><em>Example: What is the LCM of 10, 20, 25?</em></strong></p>
<p><em>Step 1</em>: 10= 2<sup>1 </sup>X 5<sup>1</sup><br />
: 20 = 2<sup>2  </sup>X 5<sup>1</sup><br />
: 25= 5<sup>2</sup><br />
<sup> </sup><em>Step 2</em>: 2, 5<br />
<em>Step 3</em>: 2<sup>2  </sup>X 5<sup>2</sup></p>
<p>With this method, we can find LCM of any number.</p>
(Questions) <br />
<p><strong><em>Example 2: What is the LCM of 35, 45, 55?</em></strong><br />
Now here we go by another method, firstly find the LCM of 35 and 45.<br />
Now these two numbers can be broken into:  35 = 5<sup>1 </sup><sub>* </sub> 7<sup>1  </sup>and 45 = 3<sup>2 </sup><sub>* </sub> 5<sup>1. </sup><br />
So it can be observed there is no 3<sup>2  </sup> so we have to multiply 35 with 3<sup>2  </sup> so LCM of 35 and 45 =35 <sub>* </sub>3<sup>2 </sup>.<br />
Now we have to find the LCM of 35<sub>*</sub> 3<sup>2</sup> and 55 which can be written as 5<sup>1 </sup><sub>* </sub>11<br />
So, finally the LCM OF = 35,45,55, is 3465.</p>
<p>Another Method to calculate LCM of Numbers:</p>
<p>Division method is an another method to find the L.C.M. and H.C.F. of numbers<br />
Let<int>'</int>s take an example to understand it:</p>
<p>Example 3: Find the L.C.M. of 18, 24, and 36?<br />
To find the L.C.M. of 18, 24, 36 we will follow the following steps:<br />
1. First we will write the numbers in ascending order<br />
2. Now we will divide the numbers with a common prime factor<br />
Remember if a number is not divisible by this prime number, then write the number as it is.<br />
For L.C.M. of 18, 24, and 36 the common prime factors are 2 and 3</p>
<p><strong>HCF ( HIGHEST COMMON FACTOR )</strong></p>
<p>HCF or GCD for a set of numbers is the highest positive integral value (or factor) that completely divides the set of numbers.</p>
<p>Factors of 20: 1, 2, 4, 5, 10, 20.<br />
Factors of 30: 1, 2, 3, 5, 6, 10, 15, 30.<br />
So, 10 is the HCF of 20 and 30.</p>
<p><strong>Process of finding HCF  </strong></p>
<ul>
<li><strong>Step 1</strong> Factorise all the numbers into their prime factors.</li>
<li><strong>Step 2</strong> Collect all the common factors.</li>
<li><strong>Step 3</strong> Raise each factor to its minimum available power and multiply.</li>
</ul>
<p><strong>Example 1: HCF of 100, 200 and 250 </strong><br />
<strong>Step 1</strong> :100 = 2^2 X 5^2 ,200 = 2^3 X 5^2 ,250 = 2^1 x 5^3<br />
<strong>Step 2 </strong>: 2, 5<br />
<strong>Step 3: </strong>2^1 x 5^2 = 50</p>
<p>H.C.F. by Long Division Method</p>
<p>To find the H.C.F. of the given number we will follow the following steps:<br />
1. Divide the larger one with shorter one<br />
2. Divide again the remainder with the divisor and continue the process till it became zero<br />
3. The last divisor is the H.C.F. of the number</p>
(Picture for the long division method of HCF) <br />
<p>Let<int>'</int>s take an example for this:</p>
<p>Example 4: Find the H.C.F. of 248 and 492?<br />
To find the solution we will follow the following method</p>
<p>So the last divisor was 4 so the H.C.F of the given numbers is 4</p>
(Questions) <br />
<p>Example 1: Find the largest 4 digit number which gives 4 as a remainder when divided by 17 or 19?<br />
Solution: We will solve the question with the following approach:<br />
As per the given condition the number must be in the form of: {P(l.c.m. of a,b,c,)+r}<br />
Now l.c.m. of 17 and 19 is 323 so the number must be in the form of i.e. {P(323)+4}<br />
The largest value of P possible so that the number remains 4 digit is 30.<br />
Therefore, 323P = 323X30 = 9690.<br />
Therefore the number which when divided by 17 or 19 gives the remainder 4 is 9694</p>
<p>Example 2: Find the largest 4 digit number which gives the remainder 7 and 13 when divided by 11 and 17?</p>
<p>Solution:<br />
Since the remainder are different, we first check the difference between the remainder and the divisor i.e. 11-7 =17-13=4<br />
Since the difference is same, so we can use here our 2nd shortcut of LCM and the number must be in the form of {f(l.c.m. of a,b,c,)- D}<br />
So now the LCM of 11 and 17 is 187, so the number must be in the form of 187f <int>-</int> 4<br />
Now we have to find the value of f so the largest four digit number in the form of 187f id 187 x 53=9911 and the number which gives the remainder 7 and 13 when divided by 11 and 17 is 9907.</p>
<p>Example 3: Find the largest 3 digit number which gives the remainder 1 and 2 when divided by 3 and 5?<br />
Solution:<br />
This question is based on the third shortcut given above. Since the remainder is not the same when divided by the two numbers above and the difference between the remainders and the divisors is different as well, we use the following condition:<br />
{p(l.c.m. of a,b,c,)+A} (A is the smallest number) and p may be any positive integer.</p>
<p>Let<int>'</int>s find the smallest such number first:<br />
When N/3 ,the remainder is 3 i.e. the number will be in the form of (3h + 1) where h = 1 ,2,3,4&#8230;.<br />
Taking N= 3h+1<br />
When this number N is divided by 5, the remainder is 2, so that means N-2 is clearly divisible by 5, that is (3h +1-2) is divisible by 5.</p>
<p>Let<int>'</int>s take values for h.<br />
h =1<br />
3 x 1 -1 = 2 not divisible by 5<br />
h =2<br />
3 x 2 -1= 5 is divisible by 5</p>
<p>So we have the smallest value for h as 2 and the smallest number as 7<br />
Going by our formula=<br />
N = {k(l.c.m. of a,b,,)+s.n.} where s.n.(smallest number)<br />
So the number will be in the form of 15k + 7.<br />
Now we have to find the largest 3 digit number in the form of 63k+59<br />
Putting values for N, 66 x 15 + 7 = 997</p>
<p><strong>Shortcuts for HCF:</strong><br />
There are two types of question usually asked in the examination based on H.C.F.<br />
1. When  numbers a, b, c  is divided by N and gives the same remainder r.<br />
2. When  numbers a, b, c  is divided by N and gives the different remainders p,q,r.</p>
<p>In the first method  let us assume the  numbers  a, b, c  is divided by N and gives the same remainder r each time then the H.C.F. is given by the H.C.F. of (a <int>-</int> b )or (b <int>-</int> a)<br />
and (b <int>-</int> c) or (c <int>-</int> b) and (c <int>-</int> a)or (a <int>-</int> c).<br />
Let<int>'</int>s have an example to understand it more clearly.</p>
<p>Example 1: When 59, 77,104 divided by N gives the same remainder in each case, then find the largest value of N possible?</p>
<p>Solution: Let us suppose the number N is the number which we have to find so:<br />
Step 1: 59 = N x a +r&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;..1<br />
77 = N x b +r&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;..2<br />
104 = N x c +r&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;..3</p>
<p>Now subtract the equations we have (note that we will take only positive values)</p>
<p>Step 2: 77 &#8211; 59 = 18&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.4<br />
104 &#8211; 77 = 27&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.5<br />
104 &#8211; 59 = 45&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;..6</p>
<p>Step 3: Now we can say that<br />
18 = n x (b <int>-</int> a)<br />
27 = n x (c <int>-</int> b)<br />
45 = n x (c <int>-</int> a)</p>
<p>From this we can conclude that the N has to be the factor of 18 , 27 , 45<br />
Now we are asked for the largest number for this so we will take the H.C.F. of 18 , 27, 45 and which is 9<br />
So 9 is the largest number which divides 59 , 77 , 104 and gives 5 as the remainder .</p>
<p>When  numbers  a, b, c  is divided by N and gives the different remainder p,q,r.</p>
<p>Example 2:<br />
Find the largest number N by which  when  162, 292, 325 are divided  gives 1, 5, 3 as remainders?</p>
<p>Solution:<br />
Since the three numbers are 162 , 292 and 325 and the remainders are 1, 5, 3 so we can say that the number is totally divisible with 161 , 287 , 322, so we are looking for the largest number which divides these three so i.e. H.C.F of 161 , 287 , 322, is 7 so the 7 is the number which when divided by the 162,292,325 gives the remainder 1,5,3.</p>
<p>Some points to remember:</p>
<ul class="list5 list_color_black">
<li>LCM x HCF of two numbers is equal to the product of numbers</li>
<li>If HCF (H) of two numbers is given, then the numbers can be assume as HCF x A and HCF x B (A and B are integers)</li>
<li>HCF of a given set of numbers is always a factor of LCM</li>
<li>If H is the HCF of two numbers A and B, then H is also a factor of AX and BY, where X and Y are integers. In other words, H is also a factor of multiples of these numbers.</li>
<li>If HCF (A,B) is H, then H is also the HCF of (A) and (A+B)</li>
<li>If HCF (A,B) is H, then H is also the HCF of (A) and (A-B)</li>
<li>If HCF (A,B) is H, then H is also the HCF of (A+B) and (A-B)</li>
<li>If HCF=LCM for two numbers, then the numbers must be equal to each other.</li>
<li>If HCF of (A,B) = H, then H = HCF (A+B) and (A-B)</li>
</ul>
<p><strong>LCM and HCF of Fractions:</strong></p>
<p>LCM of two or more fractions is given by as a fraction:<br />
(LCM of numerators of all the fractions) / (HCF of denominator of all the fractions)</p>
<p>HCF of two or more fractions is given by:<br />
(HCF of numerators of all the fractions) / (LCM of denominator of all the fractions)</p>
<p><strong>QUESTIONS BASED ON THE CONCEPT OF LCM AND HCF </strong></p>
<p><strong>Example 1:  Ram can do a work in 10 days and Sham can do the same work in 12 days. How many days will it take if both of them start working together? </strong></p>
<p><strong>Solution: </strong><br />
Let us assume total work = LCM of (10, 12) units = 60 units. Now since 60 units of work is being done by Ram in 10 days, so Ram  is doing 6 units of  work per day and similarly, Sham  is doing 5 units of  work per day. Hence, t-together they are doing 11 units of  work in one day. So, finally they will take 11 = 511 days to complete the work.</p>
<p><strong>Example 2</strong><strong>: There are two bells in a temple. Both the bells toll at a regular interval of 20sec and 50 sec respectively. After how much time will they toll together for the first time?  </strong></p>
<p><strong>Solution</strong>:<br />
Time taken by the 1st bell to toll = 66.66  Time taken by the 2nd bell to toll = 50<br />
LCM (20,50) of the two = 100<br />
Hence, the first time they toll together: 100 seconds.</p>
<p><strong>Example 3: There are 24 peaches, 36 apricots and 60  bananas and they have to be arranged in several rows in  such a way that every row contains the same number of  fruits of one type. What is the minimum number of rows required for this to happen? </strong></p>
<p><strong>Solution:</strong><br />
We can put one fruit in one row, and in (24  + 36 + 60) 120 rows, we can arrange all the fruits. Or, we can put two fruits in one row and can arrange all the fruits in 60 rows. But for the rows to be minimum, the number of fruits should be maximum in one row.  HCF of 24, 36, 60 = 12, so 12 fruits should be there in one row.  Hence, the number of rows = 10</p>
<p><strong>Example 4: There is a number which when divided by 4 and 5 gives 3 as the remainder. What is the lowest three-digit number which satisfy this condition? </strong></p>
<p><strong>Solution:</strong><br />
Let us assume that there is no remainder. So,  the number has to be a multiple of LCM of 4 and 5. Now,  LCM (4, 5) = 20 But there is a remainder of 3 when divided by 4 and  5. So, the number will be of the form (20N + 3).  Hence, the numbers are 23, 43, 63, 83, 103 and so  on &#8230;  So, 103 is the answer.</p>
                    
        </div>
    </div>
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_Factors.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Divisibility.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>