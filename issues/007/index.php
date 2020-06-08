<?php include "../../header.php" ?>

<body>
<section class="single">

<h1><a class="logo back" href="../../"><i class="far fa-arrow-circle-left"></i> Back</a></h1>

      <div class="inline">
        <h2 class="article_title_list article_title single">A Reason to be Biased</h2>
        <h4>June 8th, 2020</h4>
      </div>

<p>We have some followup items from last week regarding the terms model/algorithm. Data scientists don’t agree on clear boundaries and the terms are used interchangeably but with a certain dependency on each other. Sometimes they mean something else altogether. However, here’s a definition: algorithms are formulated as code. They can be trained with a dataset (or corpus). This training gives us a weighting and can be saved as a model for later use.</p>

<p>As new algorithms are developed, they are compared against the same corpora so that the results across different algorithms can be viewed side by side.</p>

<p>In practise, it is more relevant to explore models for specific use cases and to find the right combination of tools applicable to the problem at hand. For us, that means we know some of the features we want (part-of-speech tagging, named entity recognition, dependency parsing, text classification) and that we want to train our model on different sets to see how language changes based on medium, i.e. if descriptors for <em>function</em> are different when trained on a set of YouTube comments versus Wikipedia articles.</p>

<p>When googling “best nlp tools” we often found the same candidates: NLTK, spaCy, TextBlob, StanfordNLP, GenSim and many more. Because we have no prior experience with any of these, we had no idea where to start. So, like any good data scientist, we needed a reason to be biased.</p>

<p>Explosion’s spaCy tool came across our radar two months ago, when first looking into NLP tools. We found their <a href="https://explosion.ai/demos/sense2vec?word=function&amp;sense=VERB&amp;model=2015">sense2vec</a> demo based on a <a href="https://files.pushshift.io/reddit/comments/">reddit corpus</a> and wanted to replicate its function for our research, using different corpora. That meant doing our own training. Explosion have an annotation and training tool, <a href="https://prodi.gy">Prodigy</a>. The tool seemed perfect for us, but because we have no idea what we’re doing, we were uncertain that spending $390 on a license was justified. We contacted the co-founder <a href="https://ines.io">Ines Montani</a> and she generously provided us with a free research license. Ines was very helpful in answering our beginner questions and explained the abstract concepts of text classification in language even we in academia could understand:</p>

<blockquote>
<p>If you have enough text, you end up with meaningful vectors and can see that the vectors for “cat” and “dog” are more similar than those for “cat” and “banana”</p>
</blockquote>

<p>Thanks Ines!</p>

<p>Explosion provide comprehensive documentation for all their tools, including a video tutorial on how to <a href="https://prodi.gy/docs/text-classification#video-insults-classifier">train your own insults classifier</a>. Also, I am partial to startups with nicely-designed websites.</p>

<h3>The Plan</h3>

<p>I have downloaded Prodigy and set up a Python tutorial environment on my machine. I will connect a pre-trained dataset that comes included with Prodigy and then feed it some words related to <em>function</em> and see what happens. The theory is that we can use Prodigy to train and guide the model to spit out results with increasing accuracy per iteration of training. We can repeat this process with different corpora.</p>

<h3>The Execution</h3>

<p>The first line in the <a href="https://prodi.gy/docs/text-classification#video-insults-classifier">tutorial</a> is <code>.env $ textcat less insults.txt</code></p>

<p>When I open my Terminal, I get <code>(nlp-env) spacefinder:nlp house$</code>. <code>spacefinder</code> is my device name and <code>:nlp</code> my folder and <code>house</code> the user and <code>$</code> is a bash thing. I’m not sure which shell Ines is using in the tutorial, but switching from bash to zsh didn’t change anything. What did help me was taking a closer look at my line.</p>

<p>The first term, <code>(nlp-env)</code> is my virtual Python environment. MacOS requires Python 2.7 for system features, and I don’t want to mess with that. SpaCy requires at least Python 3.0, so I created a virtual development environment in the folder where I intend to do my NLP training using <code>python3 -m venv nlp-env</code> where <code>nlp-env</code> is just the name I chose. Then, using <code>source nlp-env/bin/activate</code> I activated the virtual environment and installed Prodigy with <code>pip install prodigy*.whl</code>. This prompted a series of installations. I also installed spaCy using <code>pip install -U spacy</code>. After that, I ran <code>pip install -U spacy-lookups-data</code>, which installs additional lookup tables and rules for lemmatisation followed by <code>python -m spacy download en_core_web_sm</code>, the small pre-trained English language model, and also installed the <code>en_core_web_lg</code> model for additional data. I installed both to later compare two standard sources in our text classification. We also want to test with other sources, but will use the built-in models first to avoid initial complexity.</p>

<p>I felt confident. So far I followed the instructions to install spaCy and Prodigy. I wasn’t sure how necessary it was to also install spaCy since it should be installed along with Prodigy as a dependency.</p>

<p>So I execute my first line <code>(nlp-env) spacefinder:nlp house$ textcat less function.txt</code>  </p>

<code>-bash: textcat: command not found</code>

<p>I looked at that first line again <code>.env $ textcat less insults.txt</code>. <code>.env</code> is the virtual environment, <code>insults.txt</code> a seeds file with four words to point the model in the right direction for training. But the meaning of <code>textcat less</code> still eluded me.</p>

<p>It took me well over an hour to figure out the anatomy of this first command, even through Ines is walking viewers through the video tutorial and I have my Terminal window open. I was stuck on the first line.</p>

<code>textcat: command not found</code>

<p>At this point, I went to Google (“textcat python”) and did not get clear results. I read and reread the spaCy and Prodigy documentation. Looking at the documentation, the closest I could find was a recipe (a series of commands leading to the execution of a function) called <code>textcat.teach</code>. I performed a <code>pip search</code> (searching for installable python modules) for <code>textcat</code> and also got no response. Testing another query, <code>pip search nltk</code> gave me lots of results. It did not seem like <code>textcat</code> was an installable module but rather just an algorithm (or something) that’s part of NLP tools such as spaCy.</p>

<p><code>textcat.teach function.txt</code> again just gave me <code>textcat.teach: command not found</code> which got me to think that maybe I installed something wrong or needed to declare the python module that should be used to process the command. I thought being in my virtual environment was enough, but I tried <code>prodigy textcat less function.txt</code> nonetheless.</p>

<code>✘ Can't find recipe or command 'textcat'.<br />Similar recipes: textcat.eval, textcat.print-stream, textcat.print-dataset,textcat.batch-train, textcat.train-curve, textcat.teach, textcat.manual</code>

<p>Aha! A different error message is good! So I tried <code>prodigy textcat.teach less function.txt</code> and got <code>✘ textcat.teach requires at least one --label</code>. At this point I went back to the tutorial video and started at that first line <code>.env $ textcat less insults.txt</code>. It’s so elegant! No need to refer to a specific module or recipe. Maybe I was thinking too much? So I simply type <code>less function.txt</code> and this promptly opens my <code>functions.txt</code> file. Of course! <code>less</code> is a Unix utility to edit text files. I keep putting off investing more time learning about Unix basics.</p>

<code>(nlp-env) spacefinder:nlp house$ less function.txt</code>

<p>Then, I had another look at the complete first line and could dissect its anatomy. My virtual environment is <code>(nlp-env)</code>, my device name is <code>spacefinder</code>, my working directory is <code>nlp</code> and my username <code>house</code>. The command I’m executing is <code>less</code> to open <code>function.txt</code>, a text file with three words: <em>function</em>, <em>task</em> and <em>use</em>.</p>

<p>Performing the next line (<code>prodigy dataset function_seeds &quot;comment&quot;</code>) in the tutorial worked flawlessly, but the third line, <code>prodigy terms.teach function_seeds en_vectors_web_lg --seeds function.txt</code>, gave me a new hiccup: <code>Can't find model 'en_vectors_web_lg'. It doesn't seem to be a shortcut link, a Python package or a valid path to a data directory.</code> Strange. I installed the large model earlier! Maybe the path is wrong, so I repeat my command as <code>prodigy terms.teach function_seeds nlp-env/lib/python3.7/site-packages/en_core_web_lg --seeds function.txt</code> and get <code>No such file or directory: 'nlp-env/lib/python3.7/site-packages/en_core_web_lg/tokenizer'</code>. It's just missing the tokeniser now, so I'm close.</p>

<code>(nlp-env) spacefinder:nlp house$ prodigy terms.teach function_seeds nlp-env/lib/python3.7/site-packages/en_core_web_lg/en_core_web_lg-2.2.5 --seeds function.txt <br /><br />
ℹ Initializing with 4 seed terms from function.txt <br /><br />
✨ Starting the web server at http://localhost:8080 ...<br /><br />
Open the app in your browser and start annotating!</code>

<p>Aha!</p>

<p>So I do this for a while, also trying it on my phone by typing in my device name with the corresponding port, <code>spacefinder.local:8080</code>, as well as using <a href="http://localhost.run">localhost.run</a> to open up the port to the internet for others to contribute to the training. That worked too. The results were even collated between instances.</p>

<h3>The Next</h3>

<p>So then, after a successful first try the logical next step is to delete what I have and start over, this time with experience. It is not necessary to install spaCy separately! The tutorial I was following has some deprecated features that I will need to update if I want to use the full potential of Prodigy. <code>--seeds</code> is now <code>--patterns</code> and allows for more detail like POS tagging: <code>{&quot;label&quot;: &quot;FUNCTION&quot;, &quot;pattern&quot;: [{&quot;lemma&quot;: &quot;function&quot;, &quot;pos&quot;: &quot;NOUN&quot;}]}</code>. I could not get this to work and went back to the old method for now, but knowing that my results could potentially be much better I can’t rest.</p>

<p>The goal for this week is to get <code>--patterns</code> to work. Just like with the other hurdles, I’m probably close but a fundamental UNIX knowledge gap is preventing me from seeing the answer.</p>

<p>I also need to pick a tense and stick to it.</p>

<p>Till next time,<br/>
G</p>

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>
  
</section>

<?php include "../../footer.php" ?>