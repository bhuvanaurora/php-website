<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

    <div id="topic">
        <h2 id="section1">Equations</h2>
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
    <div>
        <p>
            After learning about multiplying binomials using the <a title="FOIL Help" href="FOIL">
                FOIL method</a> and discussing <a title="Polynomial Help" href="Polynomials">polynomials</a>,
            we can move on to working with quadratic equations.</p>
        <h2>
            Constructing a Quadratic Equation</h2>
        <p>
            We discovered that a polynomial is a product of two or more binomials. Let's consider
            the simple equality</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ba44bbb6-1759-428d-ac32-a4bc1addb384.gif" title=""></p>
        <p>
            If two quantities multiply to get zero, does a = 0 or b = 0? or both?</p>
        <p>
            What about the following equality</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5719a31f-91ea-4144-bffd-ed4de6d8dac8.gif" title=""></p>
        <p>
            where we substituted <b>a = (x-2)</b> and <b>b = (x+3)</b>. Does <b>x - 2 = 0</b>
            or <b>x + 3 = 0</b>, or do they both equal zero?</p>
        <p>
            Let's recall the <a title="Zero Product Property Help" href="Properties_of_Algebra">
                Zero Product Property</a> , which states that when two quantities multiply to
            get zero, either one or both of the quantities must be zero.</p>
        <p>
            Because of this property, we can break the product into two equations and solve
            for x.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/69dfa818-e140-4f30-8957-316562dbe5ff.gif" title=""></p>
        <p>
            Solving for x, we get two different values : <b>x = 2</b> and <b>x = -3</b></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0c58bff2-2582-42a0-8c57-b1c289af3e76.gif" title=""></p>
        <p>
            So we have our solutions, but what does this mean? Observing the equations, we can
            see that they can be worked with as two seperate linear equations. Let's set both
            of these equations equal to y and display them on the graph to see if we can see
            what is going on when we multiply them together.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f2fd4dd7-1a09-48e5-b7d6-aec49948fad7.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1a033a6e-af76-4537-a4d8-3e9528bc7edf.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            We can see where the lines hit the x axis (where y equals 0) at -3 and 2. Now let's
            graph the function when we multiply these linear equations together.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/89d20992-b62c-49a3-988c-d6097551b6a1.gif" title=""></p>
        <p>
            Using the FOIL method of multiplying two binomials, we obtain the function</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/97878a0c-2862-41df-9591-2647eb1e0e69.gif" title=""></p>
        <p>
            We have a polynomial function with degree two, which is called a <b>quadratic function</b>.
            Using the old fasion method of plugging in x values, we can obtain their corresponding
            y values and graph the function.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cf511237-0aca-44bb-82a8-b7203aec77c9.gif" style="width: 270px; height: 250px" title=""></p>
        <p>
            Plotting the points, we obtain the image of a parabola.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/21238de5-e4a3-4981-aded-d7923d12743f.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            All quadratic equations form the image of a parabola. Looking at the curve in relation
            to the linear equations, we can make some conjectures about their relationship.</p>
        <p>
            First, notice that the <i>x</i> intercepts of the linear equations are also the
            x intercepts of the quadratic function. This makes sense, because the quadratic
            function is the product of both linear equations. Alone, the linear equations have
            one value which makes them 0 - but the quadratic function (their product) is 0 either
            when x is -3 <i>or</i> 2.</p>
        <p>
            Observing the <i>y</i> intercepts, we can see that the y intercept of the the linear
            equation <b>y = x + 3</b> is <b>y = 3</b>, the y intercept of the equation <b>y = x
                - 2</b> is <b>y = -2</b>, and the y intercept of the quadratic function is <b>y = -6</b>.
            There is a relationship between them. In fact, the y intercept of the parabola is
            the product of the y intercepts of the linear equations!</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/3572fecd-b24c-4c1e-b424-100fbbeb4e07.gif" title=""></p>
        <p>
            In fact, we can extend this even further. The product of the y value of both linear
            equations at any given x value will yield y value for the quadratic function! This
            is why the x intercepts are the same, because if one y value equals zero, than the
            quadratic function's y value at that x value will be 0.</p>
        <p>
            Analyzing the graph a bit further, we can make a few more conjectures. Interestingly
            enough, the <i>vertex</i> of the parabola (where the parabola switches directions
            or where the vertical line of symmetry touches the parabola) is exactly where the
            distance between the two linear equations is the same from the x axis. Here is a
            graph illustrating these conjectures</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b86973a7-ba9f-44ae-a142-462de6c89f3b.gif" style="width: 400px; height: 350px" title=""></p>
        <h3>
            Relating Linear and Quadratic Equations</h3>
        <ul class="StyledUL">
            <li>A quadratic can be represented as a product of linear expressions.</li>
            <li>A quadratic function has the same x intercepts as its linear products.</li>
            <li>A quadratic function's y intercept is the product of its linear components' y intercepts.</li>
            <li>A quadratic function's y value anywhere on the graph can be found by the product
                of y values of its linear components.</li>
            <li>If the product or y values of the linear equations is positive, the y value of the
                quadratic will be positive. If the product of y values of the linear equations is
                negative, the y value of the quadratic will be negative.</li>
            <li>A quadratic function's vertex is at the point in between the x intercepts where:
                if the parabola is pointing upwards is the lowest point, if the parabola is opening
                downwards is the highest point.</li>
        </ul>
        <p>
            Using these conjectures, let's try to construct a parabola given two lines.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b0c50619-447f-4e7d-b03e-362b040938a4.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            Looking at the x intercepts of both lines, we know that the parabola will also have
            those x intercepts.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1f99662f-0c57-4944-84bc-f3ccf7766cd8.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            Multiplying the y intercepts : <b>2 * -3</b>, we get the y intercept of the parabola
            : <b>-6</b>.</p>
        <p>
            We also know that the vertex is located exactly in between the x intercepts. We
            can draw a vertical line to make it look a little more clear.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/99e63a4d-389d-4b34-a1a3-3b72460c0ba5.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            Can you see the parabola yet? We know it goes through both x intercepts, and since
            the y intercept is below the x intercepts, the parabola must open downward. We also
            know that the vertex is exactly in between both x intercepts. We can find the y
            value of the vertex by multiplying y values of the linear components at the x value
            where the line of symmetry hits the x axis. Once we have the y value of our vertex,
            we can sketch the parabola.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6402cabf-1b64-41a9-bbe5-3ac66083944e.gif" style="width: 400px; height: 350px" title=""></p>
        <p align="right">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6c90c7e7-d9b9-4ed5-a333-b6b6de96b960.gif" title=""></p>
        <p>
            We have constructed the image of a parabola given two lines, and we did it without
            the equations of the lines. This method of constructing the parabola from two lines
            isn't very popular and there are definitely easier ways of graphing quadratic functions,
            but it is beneficial to do this activity to get acquainted with quadratic functions
            and how they relate to their linear components.</p>
        <h2>
            Quadratic Expressions</h2>
        <p>
            A quadratic expression is defined as a <a title="Polynomial Help" href="/resources/lessons/math/algebra/polynomials">
                polynomial</a> of degree 2, which means that the leading term has a variable
            with an <a title="Exponent Help" href="/resources/lessons/math/algebra/exponents">exponent</a>
            of 2.</p>
        <p>
            A quadratic polynomial can also be given in a factored form as a product of two
            binomials. We have seen that they can be represented as a product of linear expressions.</p>
        <p>
            For example:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2a40ca83-06c8-4e3b-99ec-4681aa052d68.gif" title=""></p>
        <p>
            When these expressions are expanded, they take on the General Form of quadratics:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8ee91a36-848e-46ad-9f38-b1b3c58ddac4.gif" title=""></p>
        <p>
            When quadratic expressions are defined as a function, they can take on two different
            forms - General and Vertex Form.</p>
        <h2>
            Forms of Quadratic Functions</h2>
        <h3>
            General Form</h3>
        <p>
            The general form for a quadratic function is given as:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e2a6a990-07ab-468d-9c37-b90b7165cbdf.gif" title=""></p>
        <p>
            When the quadratic expression is equated with 0, it is then a quadratic <b>equation</b>.</p>
        <p>
            This is the most common form quadratic equations will take on as we work with them,
            and it is also the simplified form after multiplying two binomials together. In
            this form, the expression is quadratic <i>if and only if</i> a does not equal 0.
            If a does equal 0, the expression then becomes linear.</p>
        <p>
            Perhaps the most important aspect of having the general form with the letter coefficients
            in front of the variables is finding the <b>roots</b>, or x intercepts, of the equation
            by using the <a title="Quadratic Formula Help" href="Quadratic_Formula">quadratic
                formula</a>.
        </p>
        <p>
            In General Form, the coefficient of <b>a</b> determines if the parabola opens up
            or down. If the coefficient <b>a</b> is positive, the parabola will open upwards.
            If it is negative, it will open downwards.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e181a8ce-1673-40f0-858f-b24fded17986.gif" style="width: 400px; height: 350px" title=""></p>
        <h3>
            Vertex Form</h3>
        <p>
            Quadratic Functions can also be written in Vertex Form, which let's algebraically
            represent where the vertex of the parabola is located. The vertex is also either
            the minimum or the maximum of the parabola, depending on if it opens upwards or
            downwards.</p>
        <p>
            The point <b>(x,y)</b> of the vertex is given by <b>(h,k)</b> in the equation</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1eb481dd-959a-400b-a093-c86ac23a9cd6.gif" title=""></p>
        <p>
            Where <b>h</b> and <b>k</b> can be written in terms of the coefficients <b>a</b>,<b>b</b>,
            and <b>c</b> of the General Form</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/165768b6-fbf2-4f04-9b62-55197835d147.gif" title=""></p>
        <p>
            Given this quadratic function in general form, find the coordinate of its vertex
            and rewrite the function in vertex form.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/915d9532-5a7b-4fbd-bbdf-96a541ddeab9.gif" title=""></p>
        <p>
            We plug the general form coefficients into our equations for <b>h</b> and <b>k</b></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8264b55a-7346-461c-bec7-35a3e93a2e4a.gif" title=""></p>
        <p>
            The vertex of the quadratic funtion is <b>(1,3)</b>.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/19a06615-0e67-4e61-8ee4-ce0434fd7bdd.gif" style="width: 400px; height: 350px" title=""></p>
        <h3>
            Factored Form</h3>
        <p>
            The factored form of a quadratic function clearly gives the roots, or x intercepts
            of the equation.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/14e616bb-d8cb-4a03-b885-07701c43684b.gif" title=""></p>
        <p>
            where x1 and x2 are the x intercepts. This form also gives us the product of the
            quadratic's linear components as we have seen before.</p>
        <p>
            Graph the quadratic function in factored form</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/dc5c99ef-e77d-44ab-9d43-b96b4b839caa.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1504a0c5-9e0a-4217-9ff1-1b76946d9ce3.gif" style="width: 400px; height: 350px" title=""></p>
        <h2>
            Finding the Roots of Quadratic Equations</h2>
        <p>
            When quadratic functions are equated to 0, they are then considered quadratic equations.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f29b277d-e470-426d-b3bd-761f1584db6b.gif" title=""></p>
        <p>
            Solving quadratic equations is carried out by finding the roots of the equations,
            which are the x intercepts of the parabola. This is where the parabola hits the
            x axis.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/068875a2-5003-416e-b4dc-99ca411d8a7d.gif" title=""></p>
        <p>
            where <b>m</b> and <b>n</b> are considered the roots of the equation at <b>(m,0)</b>
            and <b>(n,0)</b>.</p>
        <p>
            There are many different ways of finding the roots of a quadratic equation. Some
            are more useful than others given the information that we have.</p>
        <h3>
            Graphing</h3>
        <p>
            Given the graph, we can look at where the parabola touches the x axis.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/88603c57-3d9d-40a8-b293-6e0acc0c296d.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            We can see in this graph that the parabola touches the x axis in two places: <b>(-2,0)</b>
            and <b>(3,0)</b>. Therefore, the roots of the equation are <b>-2</b> and <b>3</b>.
            The equation can then be written as a product.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/06ceb8ed-8202-4a01-b590-d2a19b67e97b.gif" title=""></p>
        <p>
            Sometimes, it is not that easy to see where the the roots are located. We can also
            solve for the roots algebraically.</p>
        <h3>
            The Quadratic Formula</h3>
        <p>
            The <a title="Quadratic Formula Help" href="Quadratic_Formula">quadratic formula</a>
            can be used to solve for the roots given the general form of any quadratic equation.
            It can be also used to determine how many roots the quadratic equation has.</p>
        <h3>
            The Fundamental Theorem of Quadratic Polynomials</h3>
        <p>
            Suppose <b>m</b> and <b>n</b> are numbers such that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e6d887e3-e6df-41af-b9c1-b90f5da60e69.gif" title=""></p>
        <p>
            The sum of m and n is 18 and the product is 10. Solving the second equation for
            m and subsituting back into the first equation, we get
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2a987f99-1155-4d1f-9400-5935fb21f2e4.gif" title=""></p>
        <p>
            We can multiply both sides by <b>n</b> and put all the terms on one side to get</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/26561882-6ab9-49be-b60b-b5e393a5978c.gif" title=""></p>
        <p>
            Notice that this looks like a quadratic equation in the general form. This is not
            a coincidence. The solutions, or roots, of this quadratic equation will be the two
            numbers whose sum is 10 and product is 18. This result is called <i>Viete's Theorem</i>,
            which is most commonly known as <i>The Fundamental Theorem of Quadratic Polynomials</i>.</p>
        <p>
            *If <b>m</b> and <b>n</b> are solutions to <b>x<sup>2</sup> + bx + c = 0</b></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ce0a2f50-82c9-4e07-bc94-7da528ae5722.gif" title=""></p>
        <p>
            then</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/2c2cae75-3514-4bac-b5e8-851618965cfb.gif" title=""></p>
        <p>
            <i>In any quadratic polynomial whose leading term has a coefficient of 1, the sum of
                the roots is the negative of the coefficient of the second term (the x term) and
                the product of the roots is the last term (the constant term).</i></p>
        <p>
            In other words, given the general form of a quadratic equation</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f5dc2cb9-b7bb-4b50-bf22-dbe83e8e6e2a.gif" title=""></p>
        <p>
            if <b>a</b> = 1,</p>
        <p>
            <b>-b</b> = sum of the roots of the quadratic polynomial</p>
        <p>
            <b>c</b> = product of the roots of the quadratic polynomial</p>
        <p>
            which is the same as (keeping in mind that <b>a = 1</b>)</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0286fd30-8208-4432-9fda-1d9c8683ece3.gif" title=""></p>
        <p>
            The above relationship is used to find the roots of a quadratic equation using factoring.</p>
        <h3>
            Factoring Quadratic Equations</h3>
        <p>
            The roots of a quadratic equation can be found by factoring the coefficients of
            the second and last terms. This only works for certain quadratic polynomials which
            are easily factorable.</p>
        <p>
            For example, given the polynomial below</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/d1afc278-0c8b-4bdc-a456-ceb82baf76f3.gif" title=""></p>
        <p>
            finding the roots of the quadratic polynomial by factoring involves finding the
            factors of <b><i>b</i></b> and <b><i>c</i></b>. In other words, finding values that
            when added give <b><i>b</i></b> and when multiplied give <b><i>c</i></b>. It's not
            always easy to find such 'nice' quadratic polynomials for which this method is easy
            to use but learning it is key to understanding other methods of finding roots of
            polynomials.</p>
        <p>
            For example, given the quadratic equation below</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/955337ba-a176-44b6-a6a8-a2cfa8b77508.gif" title=""></p>
        <p>
            when asked to find the roots using factoring, the result would be</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8deffdd0-5a02-4f96-8fc8-7b7142af5e79.gif" title=""></p>
        <p>
            where 1 and 2 are the roots of the equation.
        </p>
        <p>
            Using the relationship discussed before, you should notice that the sum of the roots
            is the coefficient of the second term and the product of the roots is the third
            term, i.e.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/63c8c858-6c06-4734-a906-fa369818838c.gif" title=""></p>
        <p>
            Therefore, the given quadratic equation can be thought of as</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/8b101647-fc7a-4913-b637-a1ee5875a73f.gif" title=""></p>
        <p>
            Since not all quadratic polynomials are easily factorable, there is a need for another
            method to find the roots of quadratic equations.</p>
        <h3>
            Completing the Square</h3>
        <p>
            Earlier we talked about square quadratic polynomials of the forms (x + &alpha;)(x
            + &alpha;) and how these expand to become of the general form:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/91f408af-1007-4895-91d2-a06c31362f81.gif" title=""></p>
        <p>
            The roots of the quadratic polynomial above are -<img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/811838df-9907-4918-8cad-a99c2e4f034c.gif" title="">
            and -<img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/811838df-9907-4918-8cad-a99c2e4f034c.gif" title="">
            from</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bea7d5fd-41aa-4cc9-98b9-bc8ca94cca89.gif" title=""></p>
        <p>
            which means that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b05cca8c-1dc7-41b2-8d7c-b95c6bfe5d71.gif" title=""></p>
        <p>
            The above is easy to solve, by taking the square root of both sides of the equation
            such that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/4eff2354-db15-4b12-9459-ce18179983fa.gif" title=""></p>
        <p>
            which means that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ebe68508-e266-45a1-8225-bd02fea5b7cf.gif" title=""></p>
        <p>
            but since a quadratic polynomial must have 2 roots, we say that
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/61665ec9-80fc-4e35-9be6-41852b2e2893.gif" title=""></p>
        <p>
            which is better written as
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5eac316c-207d-4192-8283-8643dfa308ea.gif" title=""></p>
        <p>
            Finding the roots of a quadratic polynomial by completing the square involves modifying
            the quadratic polynomial such that it becomes a square quadratic polynomial. For
            example, given the following quadratic equation</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e8e399ca-d1e1-4897-ae70-b1f0e7180762.gif" title=""></p>
        <p>
            The first step in changing the above into a square quadratic equation is moving
            the last term to the other side of the equal sign. In this case it involves adding
            12 to each side:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/248d00df-3963-460b-9cd7-06dde647b79b.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/01fb7f97-ea05-4d62-bab5-5de03407fa3e.gif" title=""></p>
        <p>
            The second step is to add the square of half of the coefficient of the second term
            to both sides of equation. In this case you would add 4:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f65fead5-530f-4dd1-ae03-69594d17a8ee.gif" title=""></p>
        <p>
            The equation on the left hand side is now a square quadratic equation. (Adding or
            subtracting the same number from both sides of an equation mathematically does not
            change the equation).</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/1f930cc6-4167-462a-a7fd-16b3f3aa878a.gif" title=""></p>
        <p>
            is now of the same form as</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/4b77e9ac-034c-40b3-ad28-6e5d5c3ba157.gif" title=""></p>
        <p>
            and can easily be factored as</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9c890481-049f-4122-a8af-a2958d306ddc.gif" title=""></p>
        <p>
            Thus we end up with</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/733df71e-0842-4573-b08f-7a93b93b797e.gif" title=""></p>
        <p>
            The third step is to find the square root of both sides of the equation:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/ef41da03-eb2b-4c3d-93a1-62625caff300.gif" title=""></p>
        <p>
            to end up with</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e1ac9004-e3d5-43c0-bfbd-08a62849781c.gif" title=""></p>
        <p>
            Whenever you take the square root of a number you always end up with two results;
            the positive and negative, in this case +4 and -4.</p>
        <p>
            The last step is to solve for x, in this case by subtracting 2 from both sides of
            the equation.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cadd64b7-973e-4c8a-9750-a270d2f3bfe1.gif" title=""></p>
        <p>
            and</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f240dddc-fafa-4fdd-8fbe-97bf9e29a6a1.gif" title=""></p>
        <p>
            thus x = 2 and x = -6 are the roots of the equation, which is better written as
            x = {-6,2}.</p>
        <h2>
            Quadratic Equations and Geometry</h2>
        <p>
            Quadratic Equations come up on various occasions in <a title="Geometry Help" href="/resources/lessons/math/geometry">
                geometry</a>. The simplest quadratic equation, <b>x<sup>2</sup>=k</b>, describes
            the relationship between the sides of a square (x) and it's area (k).</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bf8d57f7-01a0-462d-a04f-39ee81869d2b.gif" style="width: 200px; height: 200px" title=""></p>
            <p>In fact, this is why quadratics have their name. The variable is <i>squared</i>, which
            in geometry forms a square, a figure with four sides.</p>
        <p>
            We can represent this relationship through the graph of <b>f(x) = x<sup>2</sup></b>.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/fb943f9b-0098-49bd-9e1a-2eee7b1574b4.gif" style="width: 400px; height: 350px" title=""></p>
        <p>
            When the side of a square is 1, the area is 1. When the side is 2, the area is 4,
            and so on. We do not consider the side of the parabola to the left of y axis because
            we cannot have negative length in geometry.</p>
        <p>
            Other area formulas, such as the area of a circle, can be represented by quadratic
            equations.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/9a744bc7-6ab4-40d5-8ec3-02ca0d55fd71.gif" title=""></p>
                   
     </div>
    </div>
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_Inequalities.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Functions.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>