<!--
    Bhuvan
    bhuvan.aurora@gmail.com
-->
<?php require('../h&f/header.php'); ?>

<div id="topic">
        <h2 id="section1">Probability</h2>
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
            Probability is the branch of mathematics that deals with the study chance. Probability
            deals with the study of experiments and their outcomes.</p>
        <h2>
            Probability Key Terms</h2>
        <ul class='StyledUL'>
            <li>
                <p>
                    <b>Experiment</b></p>
                <p>
                    An experiment in probability is a test to see what will happen incase you do something.
                    A simple example is flipping a coin. When you flip a coin, you are performing an
                    experiment to see what side of the coin you'll end up with.</p>
            </li>
            <li>
                <p>
                    <b>Outcome</b></p>
                <p>
                    An outcome in probability refers to a single (one) result of an experiment. In the
                    example of an experiment above, one outcome would be heads and the other would be
                    tails.
                </p>
            </li>
            <li>
                <p>
                    <b>Event</b></p>
                <p>
                    An event in probability is the set of a group of different outcomes of an experiment.
                    Suppose you flip a coin multiple times, an example of an event would the getting
                    a certain number of heads.</p>
            </li>
            <li>
                <p>
                    <b>Sample Space</b></p>
                <p>
                    A sample space in probability is the total number of all the different possible
                    outcomes of a given experiment. If you flipped a coin once, the sample space <b>S</b>
                    would be given by:</p>
                <p align="center">
                    <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/a7800585-c6a0-4520-bd8c-e75a6dcb8134.gif" title=""></p>
                <p>
                    If you flipped the coin multiple times, all the different combinations of heads
                    and tails would make up the sample space. A sample space is also defined as a Universal
                    Set for the outcomes of a given experiment.</p>
            </li>
        </ul>
        <h2>
            Notation of Probability</h2>
        <p>
            The probability that a certain event will happen when an experiment is performed
            can in layman's terms be described as the chance that something will happen.
        </p>
        <p>
            The probability of an event, <b>E</b> is denoted by</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/b1bb19a2-7bab-44c2-a82f-38e72187b9c1.gif" title=""></p>
        <p>
            Suppose that our experiment involves rolling a die. There are 6 possible outcomes
            in the sample space, as shown below:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/da4f28de-ca2a-4406-b785-1d1a19f4bd44.gif" title=""></p>
        <p>
            The size of the sample space is often denoted by <b>N</b> while the number of outcomes
            in an event is denoted by <b>n</b>.</p>
        <p>
            From the above, we can denote the probability of an event as:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/c1841b2e-7098-414c-8813-8b2ad07249b8.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/00960229-695f-421d-8a55-be8f3f23da7b.gif" title=""></p>
        <p>
            For the sample space given above, if the event is 2, there is only one 2 in the
            sample space, thus n = 1 and N = 6.
        </p>
        <p>
            Thus probability of getting a 2 when you roll a die is given by</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/510ec7b1-a54e-4ace-a1d8-3a2079f8929d.gif" title=""></p>
        <h2>
            Understanding the Magnitude of the Probability of an Event</h2>
        <p>
            The largest probability an event can have is one and the smallest is zero. There
            are no negative probabilities and no probabilities greater than one. Probabilities
            are real positive numbers ranging from zero to one. The closer the probability is
            to 1, the more likely the event is to occur while the closer the event is to zero,
            the less likely the event is to occur.
        </p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/91bca3a5-1988-42e6-ac83-a318f0bf2a91.gif" title=""></p>
        <p>
            When an event has probability of one, we say that the event must happen and when
            the probability is zero we say that the event is impossible.</p>
        <p>
            The total of all the probabilities of the events in a sample space add up to one.
        </p>
        <p>
            Events with the same probability have the same likelihood of occurring. For example,
            when you flip a fair coin, you are just as likely to get a head as a tail. This
            is because these two outcomes have the same probability i.e.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/6f79efe3-c5d4-447a-ad02-04c4723a4215.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cc15d472-a47a-4351-95c0-287323c7b823.gif" title=""></p>


            <h1>
            Further Concepts in Probability</h1>
        <p>
            The study of <a title="Probability Help" href="/resources/lessons/math/statistics_and_probability/probability">
                probability</a> mostly deals with combining different events and studying these
            events alongside each other. How these different events relate to each other determines
            the methods and rules to follow when we're studying their probabilities.</p>
        <p>
            Events can be pided into two major categories dependent or Independent events.</p>
        <h3>
            Independent Events</h3>
        <p>
            When two events are said to be independent of each other, what this means is that
            the probability that one event occurs in no way affects the probability of the other
            event occurring. An example of two independent events is as follows; say you rolled
            a die and flipped a coin. The probability of getting any number face on the die
            in no way influences the probability of getting a head or a tail on the coin.</p>
        <h3>
            Dependent Events</h3>
        <p>
            When two events are said to be dependent, the probability of one event occurring
            influences the likelihood of the other event.</p>
        <p>
            For example, if you were to draw a two cards from a deck of 52 cards. If on your
            first draw you had an ace and you put that aside, the probability of drawing an
            ace on the second draw is greatly changed because you drew an ace the first time.
            Let's calculate these different probabilities to see what's going on.</p>
        <p>
            There are 4 Aces in a deck of 52 cards</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/86d90efc-9c0b-44e9-be41-97b402df57f4.gif" title=""></p>
        <p>
            On your first draw, the probability of getting an ace is given by:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/02cec729-378c-4293-8a5c-3873e0b06942.gif" title=""></p>
        <p>
            If we don't return this card into the deck, the probability of drawing an ace on
            the second pick is given by</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/7a45b393-0275-47ac-93e1-9669f5c31caa.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/11221e29-96ea-44fb-b7b5-af614f1bec96.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/78fdf71e-fc1c-41d2-8fb8-bc2baeb25c25.gif" title=""></p>
        <p>
            As you can clearly see, the above two probabilities are different, so we say that
            the two events are dependent. The likelihood of the second event depends on what
            happens in the first event.</p>
        <h2>
            Conditional Probability</h2>
        <p>
            We have already defined dependent and independent events and seen how probability
            of one event relates to the probability of the other event.</p>
        <p>
            Having those concepts in mind, we can now look at conditional probability.</p>
        <p>
            Conditional probability deals with further defining dependence of events by looking
            at probability of an event given that some other event first occurs.</p>
        <p>
            Conditional probability is denoted by the following:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e59e7ee6-ca34-4ae3-9fc0-08a84543e64a.gif" title=""></p>
        <p>
            The above is read as <b>the probability that B occurs given that A has already occurred</b>.</p>
        <p>
            The above is mathematically defined as:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e9a3e0bc-7311-4a70-9492-51e4185e1fbe.gif" title=""></p>
        <h2>
            Set Theory in Probability</h2>
        <p>
            A sample space is defined as a universal set of all possible outcomes from a given
            experiment.
        </p>
        <p>
            Given two events <b>A</b> and <b>B</b> and given that these events are part of a
            sample space <b>S</b>. This sample space is represented as a set as in the diagram
            below.</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/5e82c321-50b5-409e-8e96-0867d5e25845.gif" title=""></p>
        <p>
            The entire sample space of <b>S</b> is given by:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/335c60b3-c754-46f0-884f-f68ef15fa6be.gif" title=""></p>
        <p>
            Remember the following from set theory:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/67755eb3-ef03-48ab-adaa-c5a73e4f2b32.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/293c1f6d-d849-46fe-ae66-ebaba2d7ce6a.gif" title=""></p>
        <p>
            The different regions of the set <b>S</b> can be explained as using the rules of
            probability.</p>
        <h2>
            Rules of Probability</h2>
        <p>
            When dealing with more than one event, there are certain rules that we must follow
            when studying probability of these events. These rules depend greatly on whether
            the events we are looking at are Independent or dependent on each other.</p>
        <p>
            First acknowledge that</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/13f13db9-4e7c-4e74-a4f9-b53fd609b753.gif" title=""></p>
        <h3>
            Multiplication Rule (A&cap;B)</h3>
        <p>
            This region is referred to as 'A intersection B' and in probability; this region
            refers to the event that both <b>A</b> and <b>B</b> happen. When we use the word
            <b>and</b> we are referring to multiplication, thus <b>A and B</b> can be thought
            of as <b>AxB</b> or (using dot notation which is more popular in probability) <b>A</b>&bull;<b>B</b></p>
        <p>
            If <b>A</b> and <b>B</b> are dependent events, the probability of this event happening
            can be calculated as shown below:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/bc4562cc-4ed2-4198-9da7-c9d25a4def3d.gif" title=""></p>
        <p>
            If <b>A</b> and <b>B</b> are independent events, the probability of this event happening
            can be calculated as shown below:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/015b1db6-79a1-4950-bd46-fcdd990c403a.gif" title=""></p>
        <p>
            Conditional probability for two independent events can be redefined using the relationship
            above to become:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e35b7b92-6c2b-4477-9ad5-80ee1fec7f0d.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/92f1c2b8-667d-4f24-90f5-feae680ce4d4.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/fb19fe01-5e07-4acc-bca8-ff40b396127d.gif" title=""></p>
        <p>
            The above is consistent with the definition of independent events, the occurrence
            of event <b>A</b> in no way influences the occurrence of event <b>B</b>, and so
            the probability that event <b>B</b> occurs given that event <b>A</b> has occurred
            is the same as the probability of event <b>B</b>.</p>
        <h3>
            Additive Rule (A&cup;B)</h3>
        <p>
            In probability we refer to the addition operator (<b>+</b>) as <b>or</b>. Thus when
            we want to we want to define some event such that the event can be A or B, to find
            the probability of that event:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/01e99119-2445-4a2d-8a7d-e21ee7addfeb.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/21e46f12-6a38-4be4-b222-a6081ec171fb.gif" title=""></p>
        <p>
            Thus it follows that:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0e5467c1-a3cc-4279-b6d9-f5bd4598a14d.gif" title=""></p>
        <p>
            But remember from set theory that and from the way we defined our sample space above:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/520929d7-0b17-432e-bc6d-2eaa91d7b0f6.gif" title=""></p>
        <p>
            and that:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/f4606358-c578-4386-b4b0-058107c0c5c4.gif" title=""></p>
        So we can now redefine out event as
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/0bc7f772-32ce-4d08-a3c9-f30e504b954e.gif" title=""></p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/cc2bad44-37bb-4052-9997-ffd7245be087.gif" title=""></p>
        <p>
            The above is sometimes referred to as the subtraction rule.
        </p>
        <h2>
            Mutual Exclusivity</h2>
        <p>
            Certain special pairs of events have a unique relationship referred to as mutual
            exclusivity.</p>
        <p>
            Two events are said to be mutually exclusive if they can't occur at the same time.
            For a given sample space, its either one or the other but not both. As a consequence,
            mutually exclusive events have their probability defined as follows:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/99109490-33d7-4716-889b-be5717f4814e.gif" title=""></p>
        <p>
            An example of mutually exclusive events are the outcomes of a fair coin flip. When
            you flip a fair coin, you either get a head or a tail but not both, we can prove
            that these events are mutually exclusive by adding their probabilities:</p>
        <p align="center">
            <img alt="" src="http://dj1hlxw0wr920.cloudfront.net/userfiles/wyzfiles/e6f03cf5-174c-43aa-8f38-d1d30231c449.gif" title=""></p>
        <p>
            For any given pair of events, if the sum of their probabilities is equal to one,
            then those two events are mutually exclusive.
        </p>
        </div>
       
    </div>
<!--/.container-->
        <div id="sublogo2">
            <a href="CAT_QA_P&C.php"><button type="button" class="prev" 
            style="margin-top:30px;">&laquo; Prev</button></a>
            <a href="CAT_QA_Binomial.php"><button type="button" class="next" 
            style="margin-top:30px;">Next &raquo;</button></a>
        </div>
    

<?php require('../h&f/footer.php'); ?>