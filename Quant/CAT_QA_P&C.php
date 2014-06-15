<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

<div id="topic">
        <h2 id="section1">Permutations and Combinations</h2>
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
        <h2>Factorials</h2>
        <p>
            A factorial is represented by the sign <b>(!)</b>. When we encounter <b>n!</b> (known
            as 'n factorial') we say that a factorial is the product of all the whole numbers
            between <b>1</b> and <b>n</b>, where <b>n</b> must always be positive.
        </p>
        <p>
            For example
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f58dbfe7-4ce4-43db-9097-a84fb89a5f52.gif" title="">
        </p>
        <p>
            0! is a special case factorial.
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cf7dd19f-2024-4671-be98-3d7081954c3d.gif" title="">
        </p>
        <p>
            This is special because there are no positive numbers less than zero and we defined
            a factorial as a product of the numbers between n and 1. We say that 0! = 1 by claiming
            that the product of no numbers is 1. The reasoning and mathematics behind this is
            complicated and beyond the scope of this page, so let's just accept 0! as equal
            to 1.
        </p>
        <p>
            This works out to be mathematically true and allows us to redefine n! as follows:
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5eaca98e-e60c-4cf7-8512-a4659a32af4d.gif" title="">
        </p>
        <p>
            For example
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1773c15c-b1c4-4a56-b389-a3daad1cb87b.gif" title="">
        </p>
        <p>
            The above allows us to manipulate factorials and break them up, which is useful
            in combinations and permutations.
        </p>
        <h2>Useful Factorial Properties</h2>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0105e87c-df4c-4d3c-8a3d-8390c1ea4466.gif" title=""><br>
            <br>
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cf03aac2-37b6-4c44-8e94-7facb7d0ea60.gif" title=""><br>
            <br>
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9fbc9617-52d8-47e3-8859-80789e270d66.gif" title=""><br>
            <br>
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/fb05e7f4-8a95-4b34-beb6-ede8073bd0c5.gif" title=""><br>
            <!--<img src="/Images/Help/Factorials_Permuations_image_5.gif" />-->
        </p>
        <p>
            The last two properties are important to remember. The factorial sign DOES NOT distribute
            across addition and subtraction.
        </p>
        <h2>Permutations and Combinations</h2>
        <p>
            Permutations and Combinations in mathematics both refer to different ways of arranging
            a given set of variables. Permutations are not strict when it comes to the order
            of things while Combinations are.
        </p>
        <p>
            For example; given the letters <i>abc</i>
        </p>
        <p>
            The Permutations are listed as follows
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b7b53812-53b3-4e05-ae04-0281003e669e.gif" title="">
        </p>
        <p>
            Combinations on the other hand are considered different, all the above are considered
            the same since they have the exact same letters only arranged different. In other
            words, in combination, you can't just rearrange the same letters and then claim
            to have a completely different combination. Combinations are done differently: Given
            <i>abc</i>, we can make a number of combinations by taking groups of letters at
            once, i.e.
        </p>
        <p>
            In groups of 1 we get
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/57d77a1c-305b-4a37-b5b8-126aaa5d1ac8.gif" title="">
        </p>
        <p>
            In groups of 2 we get
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/d69237d6-8baa-4d0f-8a9a-704c9a4d17ad.gif" title="">
        </p>
        <p>
            In groups of 3 we get
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8558fb42-1bd7-4c58-8eae-2b6dab7b58df.gif" title="">
        </p>
        <p>
            From the above, you should see that Combinations are about finding how many ways
            you can combine the different elements of the given entity.
        </p>
        <p>
            The notation for Combinations is given as
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8baeec3b-0658-47f1-9de3-0020954ccda3.gif" title="">
        </p>
        <p>
            which means the number of combinations of <i>n</i> items taking <i>r</i> items at
            a time
        </p>
        <p>
            For example
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/37986cca-e337-4075-96ec-cd4d1f852cc0.gif" title="">
        </p>
        <p>
            means find the number of ways 3 items can be combined, taking 2 at a time, and from
            the example before, we saw that this was 3.
        </p>
        <p>
            Another example to further illustrate this is as follows:
        </p>
        <p>
            Given four letters <i>abcd</i> find
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3e8d0b47-6d61-42a2-8b54-38c00db9565a.gif" title="">
        </p>
        <p>
            <i>solution:</i>
        </p>
        <p>
            Remember that the order doesn't matter when it comes to combinations, i.e. <i>bcd</i>
            is the same as <i>dbc</i> which is also the same as <i></i>cdb
        </p>
        <p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cd3c2d4c-9815-4edc-b15d-48be5cbb35a4.gif" title="">
        </p>
        <p>
            in other words,
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f323fda3-34bb-45c9-be5e-f451dae8e375.gif" title="">
        </p>
        <p>
            Combinations are also commonly denoted as
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9aedae5c-9dda-4913-9e7e-07052ec9aba1.gif" title="">
        </p>
        <p>
            and in question in the example above could have been asked as
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5fd7d442-2b85-400e-a473-099559687d40.gif" title="">
        </p>
        <p>
            So it is important to remember that
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/da7df94b-2cd9-46b1-acd3-6af17fdf96f2.gif" title="">
        </p>
        <p>
            Now that we've seen what combinations are, let us move on to relating factorials
            and combinations.
        </p>
        <p>
            The Combination function can be defined using factorials as follows:
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1a74d827-e9da-48e4-a198-84150ae2589d.gif" title="">
        </p>
        <p>
            We can prove that this is true using the previous example;
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/34b717f4-cb0b-4960-90ae-d2faa47af400.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e69757b4-f4af-4a04-b844-4f4b43306930.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bee9e7fd-ce83-44e4-aa57-33e6965ab298.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/d339ce7c-ce3c-4141-92cb-9e6a2581dcbb.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cf39851c-2cb6-47c3-b302-9a114bbba70f.gif" title="">
        </p>
        <p>
            which is the same answer we got before.
        </p>
        <p>
            Let us return to Permutations, which we defined above and also saw an example of.
            Permutations are denoted by the following
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/77555b87-4c6e-41f0-8f65-e06603ff79ec.gif" title="">
        </p>
        <p>
            which means the number of permutations of <b>n</b> items taken <b>r</b> items at
            a time.
        </p>
        <p>
            For example; given 3 letters  abc find
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2a6f863b-dedd-4c24-af03-125ce38aa112.gif" title="">
        </p>
        <p>
            <i>solution:</i>
        </p>
        <p>
            Remember that the repetition is allowed in permutations unlike in combinations;
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8203a71e-955b-482c-a955-4aca3400f4f2.gif" title="">
        </p>
        <p>
            which mean that there are 6 ways, in other words
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e00d7273-b1d9-4614-a557-c45f279154db.gif" title="">
        </p>
        <p>
            The Permutation function can also be using factorials:
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ff34a4cf-79c6-4a53-876c-ea45d24f669f.gif" title="">
        </p>
        <p>
            We can prove the above using the previous example
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/471a61e2-2d10-4678-a7dd-791461720add.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3034f46e-5286-4ce2-9a69-eb1bf8bea2ea.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/4447fe29-562a-4fec-8cf5-22e60e139031.gif" title="">
        </p>
        <p>
            Which is the same answer as before.
        </p>
        <p>
            If you take a close look at the formulae for Combinations and Permutations, you
            will be able to see that the two can be expressed in terms of one another, i.e.
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/53de7bdd-e454-44bd-95bf-0c93389ad562.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/c0bac146-bcdc-460f-9929-cc7c1a80fec3.gif" title="">
        </p>
        <p>
            from the above, the following relationship can be derived:
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1fd09b77-5fce-4326-9872-8fd674a58375.gif" title="">
        </p>
        <p>
            The above can be proved by substituting the formula for permutations into the equation
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/98cbcd5d-9c8b-4e59-90e8-1bb795cd9485.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/4dbd26d4-5402-41f0-9dfb-9a040ae51bb8.gif" title="">
        </p>
        <p class="centerTextHelp">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/17aabe70-af4d-47bd-991b-ccb304bf0251.gif" title="">
        </p>
        <p>
            Which as we already saw is the formula for Combinations.
        </p>
        <!--Main Area -->
            
        </div>
    </div>
</div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_Trigonometry.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Probability.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>