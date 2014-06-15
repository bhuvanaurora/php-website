<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

    <div id="topic">
        <h2 id="section1">Binomial Theorem</h2>
    </div>
    <div class="subject" style="width:40%">
        <p>
        <a href="../homepage.php">Home</a> |
        <a href="CAT_page.php">CAT</a> |
        <a href="CAT_QA.php">Combinatorics</a>
        </p>
    </div>

    <div id="container">

        <div class="row row-offcanvas row-offcanvas-left">
        
             <div class="hr"><hr /></div> 
    <p>
        The Binomial Theorem is a fundamental theorem in algebra that is used to expand
        expressions of the form
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/27d57c87-367f-4d5c-a4c1-bc8dc246d9ab.gif" title=""></p>
    <p>
        where n can be any number.
    </p>
    <p>
        The Binomial Theorem is given as follows:
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/79fb9117-ce34-4776-824b-032e8115edfa.gif" title=""></p>
    <p>
        which when compressed becomes</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1b37691f-d315-48f6-a994-b9a44a985619.gif" title=""></p>
    <p>
        or</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1c4f2a4e-fe4a-4710-b4b8-7940791f8e5c.gif" title=""></p>
    <p>
        The above equations are quite complicated but you'll understand what each component
        means if you look at the section on <a title="Combinations Help" href="Factorials_Permutations_and_Combinations">
            combinations</a> before you look at Binomial Theorem. The rest should become
        clearer by the time you are through with this page.</p>
    <p>
        The Binomial Theorem is important because as <b>n</b> gets larger, the expressions
        tend to become a lot more complicated.
    </p>
    <p>
        For example:</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ab0e6bd9-ebd1-4f67-9af7-bbdd8e795a5a.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f9bbce4a-4bd3-4943-8f0e-10770225b904.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/31847f13-6cef-44d5-b63c-ff85bf6bb050.gif" title=""></p>
    <p>
        As you can see, the above is relatively complicated and it would take a while to
        expand to that final form, so a need arises for some way of making expanding
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9f13390a-56b4-481e-8854-5233448a3471.gif" title="">
        much quicker and easier.</p>
    <p>
        The coefficients of each term in the above expression are</p>
    <p align="center">
        {1, 6, 15, 20, 15, 6, 1}</p>
    <p>
        and these are referred to as binomial coefficients. These are also numbers that
        correspond to 6 in the Pascal's Triangle!
    </p>
    <h2>
        Pascal's Triangle</h2>
    <p>
        Pascal's Triangle refers to a triangle of numbers with each subsequent row corresponding
        to the next whole number from zero onwards. These numbers also happen to be binomial
        coefficients.</p>
    <p>
        The Mathematics behind Pascal's Triangle is a little more advanced but the triangle
        itself is very simple. Below is Pascal's Triangle for the first numbers zero to
        eight.</p>
    <table>
        <tr>
            <td>
                n = 0:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 1:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 2:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                2
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 3:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                3
            </td>
            <td>
            </td>
            <td>
                3
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 4:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                4
            </td>
            <td>
            </td>
            <td>
                6
            </td>
            <td>
            </td>
            <td>
                4
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 5:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                5
            </td>
            <td>
            </td>
            <td>
                10
            </td>
            <td>
            </td>
            <td>
                10
            </td>
            <td>
            </td>
            <td>
                5
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
        </tr>
        <tr>
            <td>
                n = 6:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                6
            </td>
            <td>
            </td>
            <td>
                15
            </td>
            <td>
            </td>
            <td>
                20
            </td>
            <td>
            </td>
            <td>
                15
            </td>
            <td>
            </td>
            <td>
                6
            </td>
            <td>
            </td>
            <td>
                1
            </td>
        </tr>
        <tr>
            <td>
                n = 7:
            </td>
            <td>
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                7
            </td>
            <td>
            </td>
            <td>
                21
            </td>
            <td>
            </td>
            <td>
                35
            </td>
            <td>
            </td>
            <td>
                35
            </td>
            <td>
            </td>
            <td>
                21
            </td>
            <td>
            </td>
            <td>
                7
            </td>
            <td>
            </td>
            <td>
                1
            </td>
        </tr>
        <tr>
            <td>
                n = 8:
            </td>
            <td>
            </td>
            <td>
                1
            </td>
            <td>
            </td>
            <td>
                8
            </td>
            <td>
            </td>
            <td>
                28
            </td>
            <td>
            </td>
            <td>
                56
            </td>
            <td>
            </td>
            <td>
                70
            </td>
            <td>
            </td>
            <td>
                56
            </td>
            <td>
            </td>
            <td>
                28
            </td>
            <td>
            </td>
            <td>
                8
            </td>
            <td>
            </td>
            <td>
                1
            </td>
        </tr>
    </table>
    <p>
        The first thing you should observe is that for each number <b>n</b>, there corresponds
        <b>(n + 1)</b> coefficients in Pascal's Triangle. For example for <b>n</b> = 3,
        there are 3 + 1 = 4 coefficients.</p>
    <p>
        Next observe how the coefficients in the row are sums of the coefficients in the
        row above with which they form an upside down triangle (except for zero and one).</p>
    <p>
        For example, consider 3 and 4</p>
    <p>
        for <b>n</b> = 3, the coefficients from Pascal's triangle are {1, 3, 3, 1}</p>
    <p>
        for <b>n</b> = 4: the coefficients from Pascal's triangle are {1, 4, 6, 4, 1}</p>
    <p>
        If you look closely at these two sets of coefficients you should observe the following;
    </p>
    <p>
        The first coefficient in any set is 1,</p>
    <p>
        the next coefficient is equal the sum of the first and second coefficients of the
        previous set, i.e.
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/57ae218f-fd41-4cfb-83c4-5450dc257014.gif" title=""></p>
    <p>
        the next coefficient is equal to the sum of the second and third coefficients of
        the previous set, i.e.
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/57ea34c3-d134-4cd3-b5ac-07602bb6ebd4.gif" title=""></p>
    <p>
        the next coefficient is then equal to the sum of the third and fourth coefficients
        of the previous set, i.e.
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b03da62f-f2c5-4bc6-a625-085c9af02246.gif" title=""></p>
    <p>
        the last coefficient in each set is always 1.
    </p>
    <p>
        Thus from knowing the first 5 set of coefficients from Pascal's Triangle, you can
        always come up with subsequent sets.</p>
    <p>
        For example, knowing that the coefficients corresponding for <b>n</b> = 4 are {1,
        4, 6, 4, 1} It becomes a lot simpler to get the coefficients for <b>n</b> = 5 as
        {1, 5, 10, 10, 5, 1} and for <b>n</b> = 6 as {1, 6, 15, 20, 15, 6, 1}</p>
    <p>
        To prove that Pascal's Triangle does indeed give the term by term coefficients in
        any expansion, lets expand the following example:
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/a8e07ef6-c1f0-46d7-a09c-aa71122a4a36.gif" title=""></p>
    <p>
        First lets take <b>n</b> = 0
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bc82080b-964a-46c2-953c-e269e356c57a.gif" title=""></p>
    <p>
        Any number or variable raised to the power zero is equal to one.
    </p>
    <p>
        Next take <b>n</b> = 1
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5697527e-ea10-4543-adb9-34c21b6b8e9c.gif" title=""></p>
    <p>
        the coefficients of each term are 1 and 1, as in Pascal's Triangle</p>
    <p>
        Next take <b>n</b> = 2</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3485fcf7-5b96-4d7c-a44b-e198b08eb58b.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/00b59b8f-bcf5-499d-9a31-88f01ff133ac.gif" title=""></p>
    <p>
        the coefficients of each term are {1, 2, 1} as in Pascal's Triangle
    </p>
    <p>
        Next take <b>n</b> = 3
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/faf3b6a9-8021-4bf0-998e-7f280b8f708c.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b0533782-ccba-4d7f-a0ea-32c92d445bef.gif" title=""></p>
    <p>
        the coefficients of each term are {1, 3, 3, 1}
    </p>
    <p>
        The same trend would be observed if you continued for <b>n</b> = 4,5,6,...
    </p>
    <p>
        These same coefficients can be obtained using Mathematical Combinations of the form
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/379be7f6-a268-4e17-9b86-b8143bcb460e.gif" title=""></p>
    <p>
        which is also written as
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5bf39966-3926-48ff-97a7-8b92e982a41a.gif" title=""></p>
    <p>
        such that for the equation</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/578783ff-aeb0-4241-ae34-4651ed379f51.gif" title=""></p>
    <p>
        <b>n</b> is the exponent and <b>r</b> refers to the term of the expansion, keep
        in mind that the first term is represented by <b>r</b> = 0. The reason for this
        is because for any exponent <b>n</b> there are <b>n + 1</b> terms as we have seen
        in Pascal's Triangle, so in order to have <b>n + 1</b> terms, we need to start with
        <b>r</b> = 0 as the first term.</p>
    <p>
        Another reason is that <b>r</b> is also an exponent of one of the variables but
        more on this in a moment.</p>
    <p>
        We can also show this using the following example
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cbe2b00e-99c6-4ccf-9b2f-e233e432822a.gif" title=""></p>
    <p>
        From above, we have seen that the expansion is as follows</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8dbf9d37-5503-40f4-b1ca-abdcc90cb5db.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/4c83eebb-35c0-4bdf-bb4f-1acf8a2ab000.gif" title=""></p>
    <p>
        where we can see the coefficients of each term as {1, 3, 3, 1}</p>
    <p>
        Next we need to test the Combinations formula to see if we get the same coefficients,
        keep in mind that <b>n</b> = 3 and <b>r</b> represents each term of the expansion,
        we start with r = 0 to represent the first term
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/fcdb3285-c4d6-4472-a6e2-62e637868153.gif" title=""></p>
    <p>
        for <b>r</b> = 0, first term, the coefficient is given by</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/deb5fb68-6919-4488-b06d-9789b56ecaf4.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5dc83c03-f76b-4800-813f-c16079ab2238.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2fea9074-fcb1-47f3-bca5-98d3186664f8.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b72ef0a7-9584-445d-9220-60f4074ccc63.gif" title=""></p>
    <p>
        for <b>r</b> = 1, second term, the coefficient is given by</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/93fded6b-0d5d-49ef-87fd-32d64a176858.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/a0a79e3c-5b42-438c-a092-ac5272134625.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5b1f9835-1429-4a34-820f-9d627b91e3a3.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2f168839-424c-47d8-873b-59e6b85a9e14.gif" title=""></p>
    <p>
        for <b>r</b> = 2, third term, the coefficient is given by</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/86215295-233c-42e0-964c-f418e0b1fc74.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/a6a6fa59-4aef-4feb-ab6c-349464720449.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/dd91a7dd-a55d-42d7-9db1-c44723b3abed.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b60de544-4a91-44fd-8465-d91128e0bf24.gif" title=""></p>
    <p>
        for <b>r</b> = 3, fourth and final term, the coefficient is given by</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3d7c5750-3090-4cd5-a656-6462fc74696c.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/86ffbc35-bf2d-4052-9ede-8a04a67897e2.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/940dbf87-068a-486f-afb0-56c95b760658.gif" title=""></p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/def80db1-d726-4035-87a1-2431beb67314.gif" title=""></p>
    <p>
        So we get as coefficients from the above: {1, 3, 3, 1} which are the same coefficients
        from Pascal's triangle.</p>
    <p>
        So now we have seen that the Binomial Theorem gives the coefficients of the expansion,
        it doesn't stop there, the theorem also provides a way of keeping track of the exponents.</p>
    <p>
        Let's take a look at the binomial theorem once again</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/16d36ae2-3f4e-4670-96b2-41cc38913c2e.gif" title=""></p>
    <p>
        Taking an example of <b>n</b> = 3,</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9da027c4-f003-43ef-9667-c3af7e0bba92.gif" title=""></p>
    <p>
        Keeping in mind that any number or variable raised to the power zero is equal to
        one, the above can also be written as</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3f160e6f-2de7-42cb-a3f4-080f4e9e2b81.gif" title=""></p>
    <p>
        Observe the ascending order of the powers from 0 to 3 on <b>b</b> and the descending
        order of the powers from 3 to 0 on <b>a</b>. That is how any expansion of the form
        <b>(a + b)</b> raised to the power <b>n</b> will turn out for any positive whole
        number <b>n</b>, as the exponent on one variable increases, the exponent on the
        other variable decreases, such that for any term of the expansion, the sum of the
        exponents is always equal to <b>n</b>.</p>
    <p>
        Looking at the example above
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cde95eaf-de94-44ad-a6cc-a49896cd410b.gif" title=""></p>
    <p>
        Since <b>n</b> = 3, you should see the when you add the exponents of any term, they
        equal to 3. This is another reason why we start with <b>r</b> = 0 as the first term.</p>
    <p>
        This relationship can be represented mathematically as</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/251d3913-7723-48db-aecd-38ab3a42a80c.gif" title=""></p>
    <p>
        such that at any point in the expansion</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ed8f48d9-b086-494f-8c1b-699941d4af63.gif" title=""></p>
    <p>
        and r increases from 0 to n.
    </p>
    <p>
        So now we have seen the different components of the binomial theorem and what they
        mean, each term of the expansion (a + b) raised to the power n is given by the following</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9c87861e-bd49-477c-ae6f-cc220864d5e6.gif" title=""></p>
    <p>
        which we know to be the same as</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b62f84c8-89d8-450e-921f-53d11262efc8.gif" title=""></p>
    <p>
        Since we now know each term, we add them up and symbolically we use
    </p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6e08eb47-21d2-4f71-aaeb-b06a9d60a3bb.gif" title=""></p>
    <p>
        which means that add up all the terms from <b>r</b> = 0 to <b>r</b> = <b>n</b>.</p>
    <p>
        So the whole binomial theorem formula comes together as</p>
    <p align="center">
        <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f4d7ae58-a70b-47be-bb5d-6f79feb2dced.gif" title=""></p>
    <p>
        and using this you can obtain the terms of any expansion for n is a positive whole
        number.
    </p>
       </div>
        
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_Probability.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_SetTheory.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>