<?php include "../../header.php" ?>

<body>
<section class="single">

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>

      <div class="inline">
        <h2 class="article_title_list article_title single">A Rapid-Fire of Clicks</h2>
        <h4>Apr 13th, 2019</h4>
      </div>

<p>Welcome back to my mysterious little newsletter experiment. The technical side of this project is still a work in progress. To unsubscribe, you&rsquo;ll have reply to my email and tell me to leave you alone.</p>

<hr />

<p>My day to day work happens in Sketch, working with design libraries that are constantly evolving, feeding features into a standard product with different modules, used consistently across various clients, who get a themed version of the product. Every now and then half a day is spent rearranging those libraries. Do we sort them by client or by feature? Is it more important to see all instances of a feature, with its themes, side by side? Or should we rather group all themed modules into one complete client library? Both have benefits, and ideally, it should be both. But then we end up with huge Sketch files, and it becomes a performance problem. And a collaboration problem! Sketch has <em>symbols</em>, a way to have one &ldquo;master&rdquo; version of a user interface element that can be reused anywhere within the file. Changes made to the master reflect in the other screens. But where to place the master? Is it on the client-level or the feature-level? There are also <em>symbol libraries</em>, which allow for synchronised elements across different files. It makes it easier to separate cross-client elements from unique ones, but it still doesn&rsquo;t answer the question of hierarchy: where does the master live? Symbols can also be nested, which can create a rapid-fire of clicks with ever-increasing pressure. Think a group within a group within a group in Adobe Illustrator. Sure, you can cmd+click to select an item directly, but it’s a delicate dance to then select multiple items without losing your selection. And now all changes are applied across who know how many screens, and maybe you shifted something by a pixel while rage-clicking.</p>

<p>We also use Abstract, which keeps the status of a file in sync across multiple computers. In our case, the multiple is two. Abstract adds another layer of complexity, because it introduces git-like branches, masters, commits and pulls. This is important, because we want to collaborate on files simultaneously and branching a file allows for that. After committing changes, we can merge those branches into a master file — always checking for merge conflicts, which invariably occur. In a two-person design team, the benefit of such a system is unbalanced with the effort. It avoids the age-old <em>is this the latest version?</em> only to be replaced with <em>did you commit and merge?</em> — we&rsquo;re learning and improving the process. <em>Committing</em> a branch feels like a super-save: It&rsquo;s not just a snapshot of a file in time, a backup in case of crash — you&rsquo;re serious about it, it&rsquo;s done, ready to be merged with master. It feels good to end a day committing your branch, analogous to cleaning your desk. Tomorrow is a new day, a new branch. I name a branch as a todo item and complete it, that helps me keep track of my daily accomplishments.</p>

<p>A future use-case for git would be to integrate with the developer team&rsquo;s GitHub, but it would need to be a delayed system since we need the design finalised and polished before it&rsquo;s handed over for development. More on that later.</p>

<hr />

<p>The more rewarding commits are for client workshops. It helps to arrange the screens in a logical workflow, but it&rsquo;s merely an assumed workflow before it&rsquo;s put through its paces. (Co-)conducting such client meetings is a new experience for everybody at the company. At a recent workshop, to put the participants at ease, I told them that we&rsquo;re as nervous as them, this was new for us too. A joke that earned me the stern feedback not to admit poor performance in front of a client — of course! We agreed that in this case it was understood as an ice-breaker. But was it admittance of negligence in our work? We&rsquo;re not a big company. At our level, any kind of client research, workshopping, testing is a bonus. Any amount is better than just assuming a use flow and it sets us apart from the competition. Looking at them, it&rsquo;s obvious they don&rsquo;t strive for a user-friendly experience. <span class="smallcaps"><a href="https://en.wikipedia.org/wiki/Minimum_viable_product">MVP</a></span> as <span class="smallcaps"><a href="https://en.wikipedia.org/wiki/Unique_selling_proposition">USP</a></span>.</p>

<p>There are a thousand resources about Human Centered Design workshops and a common theme is that there is no clear list of actionable items. They give a few pointers, but when it comes to the concrete, they agree: <em>it depends</em>. Sure, you set the scene, clarify the goals of the meeting, have a comfortable and productive environment, provide coffee, water and snacks. But then what? A product demo before putting people in front of laptops? Shouldn&rsquo;t the product be self-explanatory? Wouldn&rsquo;t any explanation or introduction skew the test results? <em>It depends</em>. Our product isn&rsquo;t intended for the general audience. It&rsquo;s an expert tool. There&rsquo;s schooling before deployment. We can&rsquo;t get away without manual, a guided tour, a glossary. Is that inherently bad? Shouldn&rsquo;t we still make the product as clear as possible even without a tutorial? The two-tier design team agrees, and is pushing to better understand the real product use. We were granted new resource-allocation for design research, a success! The result of that was this week&rsquo;s workshops, results that will shape the future product development process.</p>

<p>Yes, even expert tools can be intuitive.</p>

<p>Our Design Research Toolkit is still a fragile thing. It needs to be nurtured, carefully handled. After each workshop, interview questions are reformulated, or replaced with new ones. We learn about clarification, interpretation and timing. After a quick round of individual questions, we give each user a laptop and a few minutes to freely explore the product before giving them a list of tasks increasing the required product-literacy. If we have more people than computers, we pair them up. We don&rsquo;t help them with the answer, a user not being able to figure out the route to the solution is valuable information for us. We end the workshop with a round of group questions and answers, thank the participants for their time, and part ways. Immediately afterwards we start analysing the feedback: Were there common themes, where was the most friction? Using a screen recording, we kept the user&rsquo;s activities, and mapped those with a mouse heat-map indicating where most clicks were made. In general, the less clicks, the more efficient the user flow. Does the user automatically go to the top right corner to look for the contact form instead of the footer? Maybe the UI should be rearranged to match expectations.</p>

<figure>
  <img src="heatmap.jpg"/> 
  <figcaption>
    <h5>Heat Map from a User Test</h5>
  </figcaption>
</figure>

<p>We begin with a simple wireframe and add our pre-existing high-fidelity components to it, making the required theming tweaks and end up with a rough user flow. Then we try to create a click dummy. Yes, <em>try</em>. Because no matter how many screens are prepared, we will have forgotten a step. These interactions don&rsquo;t become clear until you do a high-fidelity user flow. A diagram helps, a wireframe helps, but did we make a screen for the hover state of a cancel button in a dialog box? When every action is clearly defined, it makes it easier to hand over the designs to the development team. Less back-and-forth between the different teams saves time. Time well spent in solid research and improved user flows. And since developers are paid more than designers, it&rsquo;s in the interest of the company to have an impeccable user flow before starting the technical implementation.</p>

<p>Using the results of the workshops we can justify design changes, and improve interactions to match user expectations, resulting in a better product (and ideally a renewed SaaS license).</p>

<hr />

<p>Doing this work, and incorporating findings into updated screens, I miss the academic environment where research and analysis was the focus. Investing hundreds of hours of reading, talking, experimenting into a distilled slogan can&rsquo;t always be justified in the business context. When a company does not have a concise mission statement, such research can help identify overarching goals and motivations. It takes a certain state of mind, or corporate identity to allow for such lavish yet, I believe, fundamental dives into company <span class="smallcaps">DNA</span>. I get the chance to have a glimpse at this kind of work, but I want more! My day to day is working on <span class="smallcaps">UI</span>, sometimes collaborating on <span class="smallcaps">UX</span>, and rarely research.</p>

<p>Now that the proposal for integrating user research into the product development cycle is accepted, my hopes are up. We&rsquo;ve already ran two workshops, and the results are promising. Not every finding is positive, but we&rsquo;re not meeting with clients to be showered in praise. We want to understand real world use and make meaningful improvements to the overarching product — a benefit for every client, not just the one we met with.</p>

<p>I still struggle with constructing and evaluating interview questions but I guess they will get better the more data we have. How do you interview people? Be it for workshops or job interviews or just asking them about their passion. It’s good to start broad and get more specific, where should open-ended questions begin, and can we use abstraction or should a question always be related to an identifiable feature or issue? Should you even ask questions you don’t want to hear the answer to? Are they not the most valuable?</p>

<p>In my quest towards more user experience and research, these questions will be answered. More workshops will follow, with a range of clients, and maybe in the future I can justify a <a href="https://www.nngroup.com/ux-conference/">Norman Nielsen Group seminar</a>. And maybe this will help clarify some still undefined intentions about a Master degree.</p>

<p>Signing off, <br>
G</p>

<hr>

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>
  
</section>

<?php include "../../footer.php" ?>