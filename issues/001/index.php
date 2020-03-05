<?php include "../../header.php" ?>

<body>
<section class="single">

<h1><a class="logo back" href="../../"><i class="far fa-arrow-circle-left"></i> Back</a></h1>

      <div class="inline">
        <h2 class="article_title_list article_title single">Turn 90&deg; and Then Drive Down to Quit</h2>
        <h4>Mar 17th, 2019</h4>
      </div>

<p>Today is the first (non-zero) issue of my (still nameless) <a href="https://www.theatlantic.com/business/archive/2013/12/against-long-form-journalism/282256/">longformish</a> email series. To mark the occasion I have one topic for you: precision versus carelessness.</p>

<hr />

<p>While I attended university, Peter Bird was one of the two woodshop technicians. He always worked with immense consideration, meditatively delicate with materials and machines. Almost dancingly checking the sleeves of his white standard-issue overall weren’t in the way, blowing shavings from a freshly-drilled hole, wiping dust away in the direction of the grain. He was fully focused on his woodworking, skeptical to students’ questions. When, with his signature <em>all right then</em> he half-reluctantly agreed to help, it seemed like we were imposing on his domain, as if we were showing up to his house uninvited.</p>

<p>Working the lathe requires your full focus, and yet there is a calming rhythm about it, you shave off fraction of a millimetre by fraction of a millimetre, entering a state of flow. Like a long drive. You watch out, but at some point you know where you’re going and get into your known procedures – not mindless, not absent, but attention moves to the backseat and automaticity takes over. You work with routine, not rationale. Maybe you drift off too much and the carving tool catches on an edge where your workpiece was too rough, catches you at a moment of absence. You’re hyperfocused again. These operations require control. Subtractive manufacturing is unforgiving.</p>

<hr />

<p>Some everyday interactions are purely based on muscle memory: The force required to close the kitchen drawers, throwing shut the washing machine door, lifting your bike over the shoulder, advancing the lead in the mechanical pencil, or reluctantly typing your pin into a dirty <span class="smallcaps">ATM</span> keypad. When a learnt action produces an unexpected result, when the drawer doesn’t close because something is stuck, when it arrests with a shocking smash, you feel like you did something wrong.</p>

<p>Can we not design an infallible, more forgiving system? Good User Interfaces predict bad behaviour and still produce the intentioned result. With feedback messages and undo, versioning and backups we are theoretically well prepared.</p>

<p>Predicting user behaviour requires a deep understanding of the user&rsquo;s needs and goals. Chances are the users have different goals and skill levels and it&rsquo;s impossible to display all their requirements as features in a toolbar. We need to bury more rarely used functions within a menu, but accessing a menu is slower than just scanning the screen for the colourful icon.
The Mac&rsquo;s menu bar tackled this challenge efficiently. Bruce <em>Tog</em> Tognazzini, the central figure around Apple&rsquo;s Human Interface Guidelines, <a href="https://www.asktog.com/columns/022DesignedToGiveFitts.html">explains why</a>.</p>

<blockquote>
<p>Since the menu bar lies on a screen edge, it has an infinite height. As a result, Mac users can just throw their mice toward the top of the screen.</p>
</blockquote>

<p>It takes more time to do that, but at least it doesn&rsquo;t require a precise manoeuvre. Apart from the screen edges, there is one pixel location on the screen that is easier to reach than any other: the current pointer location. While doing <span class="smallcaps">UX</span> research for work, I found an <span class="smallcaps">MIT</span> course with <a href="http://web.mit.edu/6.813/www/sp17/classes/01-usability/">publicly accessible <span class="smallcaps">PDF</span>s</a> and an interesting example of menu use.</p>

<figure>
  <img src="gimp.png"/> 
  <figcaption>
    <h5>Gimp&#39;s Contextual Menu (borrowed from the MIT PDF)</h5>
  </figcaption>
</figure>

<p>Gimp, an open-source Photoshop alternative, features all its commands within the contextual menu — always available anywhere you are through a right click. This is a genius innovation, since the user doesn&rsquo;t have to move their mouse. This can significantly speed up an expert user&rsquo;s workflow since no time is lost moving the mouse between artwork, toolbar and layer panel. Adobe was foolish not to copy this feature from Gimp, right?</p>

<blockquote>
<p>Wrong. With Gimp’s design, as soon as the mouse hovers over a choice on the context menu (like File or Edit), the submenu immediately pops up to the right. That means, if I want to reach an option on the File menu, I have to move my mouse carefully to the right, staying within the File choice, until it reaches the File submenu. If my mouse ever strays into the Edit item, the File menu I’m aiming for vanishes, replaced by the Edit menu. So if I want to select File/Quit, I can’t just drag my mouse in a straight line from File to Quit — I have to drive into the File menu, turn 90 degrees and then drive down to Quit!</p>
</blockquote>

<p>Unforgiving.</p>

<p>Of course, this example is dated (Gimp has evolved, too) and while comparing this behaviour to the contextual menu on my Mac, I found that there&rsquo;s a built-in <em>forgiveness delay</em>. If I quickly move the pointer to the hierarchical sub-menu, I&rsquo;m allowed to leave the path. If I move too slowly, I lose.</p>

<figure>
  <img src="https://i.imgur.com/5c5QPKk.gif"/> 
  <figcaption>
    <h5>Forgiveness delay in the Finder</h5>
  </figcaption>
</figure>

<p>Unlocking the iPhone went from dragging a 68×44 <span class="unit">px</span> arrow in a 278×50 <span class="unit">px</span> container to sliding the entire screen to flicking it up. The motions become simpler, the targets larger.</p>

<p>Like force quitting apps when you’re done with them (a method that is actually counterproductive but not harmful and gives you control), these familiar actions are now part of us. They don’t feel like tasks, but have become reflexes.</p>

<p>In social psychology, tasks can be classified as automatic or controlled processes (<a href="https://en.wikipedia.org/wiki/Automatic_and_controlled_processes"><span class="smallcaps">ACP</span></a>) depending on their cognitive load.</p>

<p>When you’re driving, you need a destination but the rest happens automatically. You don’t think about shifting gears or stopping at a red light. Some actions happen automatically but require a goal to kickstart. Once initiated, they can be guided outside of awareness by the subconscious.</p>

<p>On the other hand, controlled processes require us to think about a situation, evaluate our actions and make intelligent decisions. Controlled processes are slower and can&rsquo;t happen in parallel without loss of focus. <a href="http://www.danielgilbert.com/Gilbert%20all%20(COGNITIVE%20BUSYNESS).pdf">In a study</a>, it was found that participants became anxious and performed worse at the task at hand simply by having the next task <em>on their mind</em>.</p>

<p>We should be transparent with the work we expect from our users. But this does make me question just how transparent. Maybe some opacity is fine. In the iOS set up screen, we go through a series of simple steps of adding a wifi network, signing into iCloud, allowing developers to receive analytics, setting up FaceID, and so on. Maybe if we saw <em>step 1 of 8</em> in the beginning of the setup, we’d hunt for a <em>skip</em> button. Knowing the weight of a task can be overwhelming.</p>

<hr />

<p>In his seminal work, <a href="https://en.wikipedia.org/wiki/Flow_(psychology)">Flow</a>, Mihályi Csíkszentmihályi outlines what happens at the intersection of the highest skill level and highest challenge level for a task, where we become so immersed in the work that nothing else matters, where time flies. This is a state where concerns such as the self, time or food are simply forgotten because we concentrate everything on the task at hand.</p>

<p>If a product can function with absolutely no distractions and embraces repeated use, it lets the user enjoy the practise of it. This does not necessarily imply the product should perform at peak with no initial knowledge, instead it should motivate the user to perfect their skill. The lever coffee machine from <a href="../000/">my previous email</a> suggests that a certain barrier of entry might be a good thing and lead to the mastery of a tool rather than just the casual use of it. Give a user control and familiarity, and they can enter a state of flow.</p>

<p>All the more frustrating, when this state is suddenly interrupted by a physical resistance (a wooden spoon atop too many utensils in the kitchen drawer) accompanied by a silverware cacophony.</p>

<hr />

<p>Signing off,<br>
G</p>

<hr>

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>
  
</section>

<?php include "../../footer.php" ?>