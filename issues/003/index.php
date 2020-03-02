<?php include "../../header.php" ?>

<body>
<section class="single">

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>

      <div class="inline">
        <h2 class="article_title_list article_title single">User Error</h2>
        <h4>May 27th, 2019</h4>
      </div>

<p>This month (we&rsquo;re on a regular schedule, it seems), we have two topics. Bad newsletter handling, and a website menu navigation where content bursts its container.</p>

<p>Thank you for joining me on this ride.</p>

<hr />

<p>Take this email from my university, asking to cast my vote in electing the Alumni of the Year:</p>

<blockquote>
<p>Instructions of how to cast your vote, along with a full nomination outline of each finalist, can be found in the Alumni of the Year Award section on our website. Please visit this page to cast your vote.</p>
</blockquote>

<p>Okay, so I go to the website. I realise that I already am at Step 3, since being on the alumni mailing list qualifies me for Step 2, and having read the newsletter introduced me to the finalists. But Step 3 requires sending an email. I have to leave my email to go to a website to be instructed to send an email in a robot-friendly format?</p>

<figure>
  <img src="vote.png"/> 
  <figcaption>
    <h5>It&#39;s not clear whether I should write VOTE NAME in the subject, or just NAME, or if capitalisation matters at all.</h5>
  </figcaption>
</figure>


<p>I don&rsquo;t mind the occasional email from my Alma Mater, swiping left to archive the message requires less effort than looking for the <em>unsubscribe</em> link, but I finally gathered the required effort to stop these messages, in the name of <a href="https://www.slideshare.net/merlinmann/inbox-zero-actionbased-email">Inbox Zero</a>.</p>

<p>So I scroll down to the footer and find, well laid out, in readable contrast, the familiar underlined text: The Unsubscribe Link.</p>

<figure>
  <img src="footer.png"/> 
  <figcaption>
    <h5>An okay email footer</h5>
  </figcaption>
</figure>


<p>Clicking the link opens a webpage with instructions to send an email with the subject <em>unsubscribe</em> to a specific address and include my full name in the body. This is basically <em>my</em> current subscription management system — primitive, and excusable for a one-man-show, but for an institution? Anyway, I send the email in the required robo-format. A few moments later, I receive this reply:</p>

<figure>
  <img src="impossible.png"/> 
  <figcaption>
    <h5>This is definitely not *User error*</h5>
  </figcaption>
</figure>

<p>Okay. Let&rsquo;s try the Email Preferences link also found in the footer of the alumni newsletter.</p>

<figure>
  <img src="unexpected_error.png"/> 
  <figcaption>
    <h5>An unexpected user error appeared!</h5>
  </figcaption>
</figure>

<p>With the Sunk Cost Fallacy in mind, I march on, determined. I email alumninewsletter-request@v-lists.brunel.ac.uk, with the command in the subject and my name in the body, and, over the course of three days, keep receiving this reply:</p>

<figure>
  <img src="delivery_incomplete.png"/> 
  <figcaption>
    <h5>Sad truck can read the erring user&#39;s feeling</h5>
  </figcaption>
</figure>

<p>Determination makes way for defeat, I vote for Jo and archive the message.</p>

<hr />

<p>Horizontal scrolling is appropriate for displaying items within a same category: an image slideshow, Airbnb experiences, shows on Netflix or albums on Spotify&hellip; Horizontal scrolling, frowned upon before touchscreens, is the norm for such lists.  Exploring the Netflix catalogue can easily turn into 20 minutes of swiping, but sideways scrolling helps compartmentalise content, you know everything in the horizontal list belongs together.</p>

<p>Horizontal scrolling, independent of display sizes, offers consistency of interaction between devices. A larger screen will merely show more items in the list, but will also eventually cut off content. It also offers vertical consistency across panels. The horizontal scroll gets a designated section and stays in line with other elements on the page.</p>

<p>But this interaction has some severe <a href="https://www.interaction-design.org/literature/article/make-it-easy-on-the-user-designing-for-discoverability-within-mobile-apps">discoverablity</a> problems. How quickly can you find movies on baseball?</p>

<style>
div.scrollmenu {
    margin: 30px 0;
  overflow: auto;
  white-space: nowrap;
  font-family: sans-serif;
  text-transform: uppercase;
  font-size: 0.7em;
}

div.scrollmenu span {
margin: 0 2px;
  display: inline-block;
  color: black;
  background: #ddd;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}

div.scrollmenu span:hover {
  background-color: #bbb;
}
</style>

<div class="scrollmenu">
  <span>Action</span>
  <span>Adventure</span>
  <span>Biopics</span>
  <span>Comedy</span>
  <span>Crime</span>
  <span>Drama</span>
  <span>History</span>
  <span>Horror</span>  
  <span>Musicals</span>
  <span>Science Fiction</span>
  <span>Sports</span>
  <span>Thrillers</span>
  <span>War</span>
  <span>Westerns</span>
</div>

<p>This list is ordered alphabetically and you knew to look for a Sports category even if it isn&rsquo;t immediately visible on screen. A predictable sorting pattern points you in the right direction in such a large menu and affordances such as a shadow that fades out elements on the outer edge of the container, or a half-cut-off element indicate that there&rsquo;s more.</p>

<p>If the list isn&rsquo;t movie categories but pages on a website with more disconnect in-between, an alphabetic sorting becomes counterproductive. We need to arrange essential elements at the start of the list to guarantee their visibility and move less commonly used features to the far end of the list.</p>

<p>Katie Sherwin, Senior UX Specialist with Norman Nielsen Group, <a href="https://www.nngroup.com/articles/horizontal-scrolling/">warns us</a>:</p>

<blockquote>
<p>Because horizontal scrolling is a lot less common on desktops, users often have no idea that they can discover content by “swiping” on large screens. Since people interact with mobile and desktop devices differently, the one-size-fits-all approach can backfire.</p>
</blockquote>

<p>Katie continues:</p>

<blockquote>
<p>Using a scrollbar on the desktop has a high interaction cost and slows people down. In a recent user test, a participant [&hellip;] complained, “<em>It’s taking me forever to scroll through this.”</em></p>
</blockquote>

<p>Knowing just how much more there is and if or when the list repeats isn&rsquo;t obvious. A scroll bar is an appropriate indicator of the dimension of content within a container, but under iOS and macOS, the scroll bar is often hidden and we have no information on the amount of content without tentatively scrolling to reveal the indicator.</p>

<p>The content people are reading has to be in the immediate vicinity of the interaction element required to navigate the content layer. The object and its tool have to be connected, or the user might not even notice the obvious visual cues of more available content outside of the visible container.</p>

<p>On touchscreens, content can also act as the navigational tool, on desktop we need to adapt. Touchscreens taught us that horizontal scrolling <a href="https://uxplanet.org/horizontal-scrolling-in-mobile-643c81901af3">can be intuitive</a>, but translating it to the desktop has its challenges.</p>

<p>Alternatively, or additionally to the scrollbar a <em>item n of x</em> label would also help in understanding the information density. Merely having arrows or a fading scrollable array of categories doesn&rsquo;t communicate how many elements are left to be discovered.</p>

<p>Katie reminds us:</p>

<blockquote>
<p>Tell people how much is left, so they can decide how much further to go. Or, in the case of a loop, users want to know when they’ve arrived back at the start.</p>
</blockquote>

<p>How do we show the list repeats or ends? Luke Wroblewski, Product Director at Google: <a href="https://www.lukew.com/ff/entry.asp?1945">Obvious always wins</a></p>

<p>A bounce at the end of a list communicates that there&rsquo;s nothing more to see. More spacing to the screen edge at beginning and end of a list than between list items helps define the borders of the content.</p>

<p>When a list repeats isn&rsquo;t very obvious in the case of Netflix. Their designers are undoubtedly aware of the compromises horizontal scrolling brings and we can only conclude that it&rsquo;s been done on purpose to maximise the length of our visits. There is a <a href="https://www.darkpatterns.org">certain kind of malice</a> to Netflix using the disadvantage an interaction has for the user to their benefit.</p>

<p>We can&rsquo;t just take the interactions we learnt from touchscreens and mirror them on desktop for mouse and keyboard. Just like we can&rsquo;t take a desktop OS and shrink it to work flawlessly on mobile. The two domains speak different languages and if copied word for word, the essence is lost in translation.</p>

<hr />

<p>Signing off, <br>
G</p>

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>
  
</section>

<?php include "../../footer.php" ?>