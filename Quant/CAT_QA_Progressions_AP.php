<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

<div id="topic">
        <h2 id="section1">Arithmetic Progressions</h2>
    </div>
    <div class="subject" style="width:40%">
        <p>
        <a href="../homepage.php">Home</a> |
        <a href="CAT_page.php">CAT</a> |
        <a href="CAT_QA.php">Quantitative Ability</a>
        </p>
    </div>

    <div id="container">

        <div class="row row-offcanvas row-offcanvas-left">
        
             <div class="hr"><hr /></div> 
        <p>
            A progression is another term for <a title="Sequence Help" href="Series_and_Sequences">
                sequence</a>. Therefore, Arithmetic Progressions (also known as Arithmetic Sequences)
            are special sequences defined by the property that the difference between any two
            consecutive terms of the sequence are constant. Whereas the rule for regular sequences
            is that the difference between consecutive terms has to have some kind of relationship,
            it may or may not be constant. The relationship may not even be of a 'difference'
            nature but may be of a 'multiplicative' nature. This is not so for Arithmetic sequences,
            the relationship has to be of a difference nature only. This common difference is
            denoted by the letter <b>d</b>.</p>
        <p>
            As an example, take a look at the sequence below;</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/19649747-77e4-42e5-bbcf-685ace49ccf8.gif" title=""></p>
        <p>
            for the sequence below to be an arithmetic progression, the difference between consecutive
            terms has to be some constant <b>d</b> such that:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5717b826-3607-400a-8ff4-cb8c9aa107c6.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/32c52892-5603-40e3-910a-7e0cc412b664.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bce38ce9-5b78-48d7-9e46-fd7cfbb18c05.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3fe7e9a5-e584-4140-a676-516f108b5d2f.gif" title=""></p>
        <p>
            since that relationship must hold true, we can move further and say that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/01c4ebc5-e00e-445b-9be2-142e61c152a0.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b80b258f-0db6-4fa8-bb10-0ab3883aba9c.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f8fb0c51-6ce9-4119-8a72-02f52c078885.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/01be6587-509b-4aa7-b031-248f24f25245.gif" title=""></p>
        <p>
            the same applies to <b>a</b><sub>4</sub>
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b41588a8-9be0-4a86-bbb4-b2991fcfa3e1.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/582bd347-6a2a-4639-b97d-0ea01f11147d.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/40e43d8c-0009-487a-b70a-b27fd5dd0be7.gif" title=""></p>
        <p>
            the same also applies to the last term <b>a</b><sub>n</sub> where by<b>a</b><sub>n-1</sub>
            is the second last term</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/87f6f508-a8c1-4356-b260-ecf54295c3e5.gif" title=""></p>
        <p>
            So now let us take a replace the terms in the sequence with their corresponding
            terms that we have obtained</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6a16fd57-02ef-44ed-8df5-0e12c7e38bb7.gif" title=""></p>
        <p>
            From the above new sequence, we should observe that to get the next term, you always
            add the first term to the product of the common difference and one less than the
            position of the next term.</p>
        <p>
            i.e. if the next term is denoted by the letter n, then</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3cc45e26-7c6d-407a-b6ee-4cf51ee61234.gif" title=""></p>
        <p>
            The above relationship should always hold true as the relationship between consecutive
            terms in an arithmetic progression. You can check that it is true by substituting
            for the values of the sequence we've been working with.
        </p>
        <p>
            This is what makes arithmetic progressions such special sequences, all you need
            to know is the first term and the common difference <b>d</b> and then you'll be
            able to find any term in the sequence without having to find its preceding term.
        </p>
        <p>
            For example, given that the common difference in an arithmetic progression is 5
            and the first term is 3, find the 10th and 25th terms of the sequence.</p>
        <p>
            solution:</p>
        <p>
            The common relationship between all terms in an arithmetic progression is given
            by</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5da4e8f3-fba8-41a1-a507-c53e6267be5c.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1c5c21f0-3381-4502-b7f1-052d34f347f7.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/84276af2-f099-4c33-ab89-890f3c150885.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/93b7b204-1c38-48f0-98bf-94c9bf4b7f9a.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b01b4f3b-d1e2-44bb-bf2a-abfc629f668c.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6449fb91-9622-4d21-93ce-3223b7b27541.gif" title=""></p>
        <h2>
            Arithmetic Series</h2>
        <p>
            Since there exist Arithmetic Sequences, Arithmetic Series also exist and are the
            sums of the terms in arithmetic sequences.</p>
        <p>
            We have already seen that a series is given in the following form</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e7ca5908-4d97-4679-b88b-3f6ee4108c46.gif" title=""></p>
        <p>
            where <b>S</b><sub>n</sub> is the notation for the sum of a series.</p>
        <p>
            We have also established that the above terms can also be written in terms of the
            first term and the common difference</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/85289a61-b53b-4d66-9076-70142c45821a.gif" title=""></p>
        <p>
            but the above can also be written in terms of the last term as follows</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5855340f-aaf6-4b8d-9a9b-0c4db722d0a3.gif" title=""></p>
        <p>
            If we were to add the two sums we would obtain the following</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/71cdba76-fdad-470f-8999-3e989fa0cf94.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/a21c8245-3de1-4753-80d8-1df84ddbc889.gif" title=""></p>
        <p>
            The above is obtained after some tedious addition and collecting like terms but
            it turns out as a nice simple expression</p>
        <p>
            So we now have an expression for the sum in terms of only the first and last terms
            as
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0aef77e7-06e2-439e-a304-f9cd9ef65d45.gif" title=""></p>
        <p>
            but we can simplify this further since we already established a way of expressing
            the any term in terms of the first term and the common difference <b>d</b></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bd9a5500-b941-4f70-b848-10fe3a4deaf9.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8c4be9e1-73a7-4c76-b197-6efffb39726a.gif" title=""></p>
        <p>
            so now we have two options of formula to use to find the sum of an arithmetic progression.
        </p>
        <p>
            Remembering from the section on Series, the notation for summation:
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/85aa5328-ee70-49f9-b54a-9eafcc170758.gif" title=""></p>
        
<!--Solved Example +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
                        <div onClick="openClose('a1')" style="cursor:hand; cursor:pointer; font-family:arial,helvetica,sans-serif; font-size:16px">
                                <b> Example 1: </b> If the 8 th term of an AP is 88 and the 88 th term is 8, then 100 th term is : </br>
                                <ul> 
                                    <li> 1 </li> <li> -4 </li> <li> 8 </li> <li>  2 </li>
                                </ul>
                                <!--p align="left"> <em>  Click here for explanation ! </p-->
                        </div>
                            
                            <div id="a1" class="texter">
                                    Given 8th term  = 88 and 88 th term = 8, let the first term of AP be 'a' and common difference be 'd', </br>
                                    and since general term of AP is given by "a+(n-1)d":  </br>
                                      88 = a + 7d (1) and 8 = a + 87d (2) </br>
                                        Subtracting we get 80 = -80d </br>
                                   Thus,  d = 1 and putting in  (1) we get a = 95 </br>
                                    Hence, 100th term is: a + 99d = 95 + 99(-1) = -4
                            </div>
<!--Solved Example +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->             
                            </br>
                        
                            <p align="right"> <a href="CAT_QA_Progressions_GP.php"> Next (Geometric Progressions) &raquo; </a> </p>
                   
     </div>
    </div>
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_Functions.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Logarithms.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>