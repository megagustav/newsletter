<?php include "../../header.php" ?>

<body>
<section class="single">

<h1><a class="logo back" href="../../"><i class="far fa-arrow-circle-left"></i> Back</a></h1>

      <div class="inline">
        <h2 class="article_title_list article_title single">Type Something Interesting or Shut Up</h2>
        <h4>May 21st, 2020</h4>
      </div>

<p>I first came across the Turing Test in my first year of university in 2011 when I read <a href="https://www.theatlantic.com/magazine/archive/2011/03/mind-vs-machine/308386/">this piece in The Atlantic</a>. In his seminal paper, <a href="https://academic.oup.com/mind/article-pdf/LIX/236/433/9866119/433.pdf"><em>Computing Machinery and Intelligence (1950)</em></a>, Alan Turing posed the central question of AI: “Can machines think?”, or rather if machines could act indistinguishably from the way a thinker acts (<a href="http://cogprints.org/2615/">Harnad, 2001</a>). </p>

<p>Natural language processing (NLP) lies between the fields of linguistics and computer science and builds the foundation of getting a machine to communicate so convincingly as to fool a person into thinking they’re talking to another person.</p>

<p>With the advent of machine learning in the 1980s, there was a revolution in the training of NLP models — away from hand-curated rules, to an approach based more on probability and “learning by doing”. Machine learning algorithms learn automatically through experience (<a href="http://www.cs.cmu.edu/~tom/mlbook.html">Mitchell, 1997</a>) and build a model based on a dataset. Using this model, the algorithm can recognise statistical patterns and make predictions.</p>

<p>Since the early 2010s, more and more readily-available tools have been developed that can be applicable to a specific problem: TensorFlow, Cuda, gensim, Keras, Stanford CoreNLP, TextBlob, NLTK, SpaCy, PyTorch, MATLAB, or IBM’s Watson.</p>

<p>For our Design for Meaning Toolkit, we have manually combed through multiple dictionaries, thesauruses, websites to build a list of descriptors for various nuances of <em>meaning</em> — functional, ritualistic and mythical. With the small dataset we performed a quick word count to gauge which words appeared most for each category. Again, manually. This isn’t exactly a scaleable workflow. To build a convincing set of words, we need a more structured and data-driven approach. We need a better system. We need to design an algorithm.</p>

<p>I looked into readily-available language processing tools but couldn’t make heads or tails of the documentation. In the end, we managed to produce visible results thanks to a <a href="https://github.com/phnm">friend</a> who is a million times smarter than me.</p>

<p><code>[(functions,0.8046008348464966),(function,0.7586157917976379),(afunction,0.726913332939148),(,function,0.724631667137146),(‘function,0.7146838903427124),(#function,0.7111786007881165),(myfunction,0.7047288417816162),(subfunction,0.7020001411437988),(testfunction,0.6974353790283203),(#functions,0.6952558159828186)]</code></p>

<p>The above is the result of weeks of trial and (mostly) error.</p>

<p>I feel like I need to explain what is happening here, or at least try to: We are looking for <em>function</em> inside a corpus. We used Facebook’s <a href="https://fasttext.cc">FastText</a> library with one million word vectors trained on Wikipedia. The tool we’re using is giving us morphologically similar words in proximity with our query word. In programming, <em>function</em> is used with all sorts of prefixes as a lazy name for a function (akin to naming your cat <em>Cat</em>). What we <em>want</em> to see are words similar in sense, not words that share 95% of the characters with our query. We limited the output of the search to 10 words. Upping the limit to 20 and 50 produced one or two relevant results but also gave us many more words that we could throw away.</p>

<p>The machine learns by looking at context, at surrounding words. That means it’s important to have a solid dataset. If our focus word is often found in close proximity to another word, chances are they’re related. This correlation can be weighted and output. That is what we see in the alphanumeric block above. </p>

<h3>Word Embeddings</h3>

<p>Corpus-based semantic representations (word embeddings) use statistical patterns in the text to map words in a vector space. (<a href="https://repositorio.ufrn.br/jspui/bitstream/123456789/24164/1/SidartaRibeiro_Theinterpretationofdream_2017.pdf">Altszyler et al., 2017</a>) In the semantic word-space, terms with a similar meaning tend to form a cluster. This relies on the concept that words with similar meaning appear in similar contexts (<a href="https://www.tandfonline.com/doi/abs/10.1080/00437956.1954.11659520">Harris, 1954</a>).</p>

<figure>
  <img src="function.gif"/> 
  <figcaption>
    <h5>Three clusters: physical functions, mathematical functions, computer functions</h5>
  </figcaption>
</figure>

<p>The <a href="http://projector.tensorflow.org">TensorFlow Embedding Projector</a> by <a href="https://ai.googleblog.com/2016/12/open-sourcing-embedding-projector-tool.html">Google AI (blogpost)</a> is an open-source tool for interactive 3D visualisation and interpretation of embeddings (<a href="https://arxiv.org/pdf/1611.05469v1.pdf">Smilkov et al., 2016</a>). Google’s Mikolov et al. are also the minds behind word2vec. </p>

<h3>word2vec</h3>

<p>Word2vec (<a href="https://arxiv.org/pdf/1301.3781.pdf">Mikolov et al., (2013)</a>) is used to produce word embeddings. It takes words from a corpus and produces a vector-space with hundreds of dimensions, each word having their unique vector. Words that are related by context in the corpus are located closely in the word-vector-space.</p>

<figure>
  <img src="redblue.png"/> 
  <figcaption>
    <h5>wikipedia2vec</h5>
  </figcaption>
</figure>

<p>In this example of <a href="http://wikipedia2vec.github.io/">wikipedia2vec</a> (<a href="https://arxiv.org/pdf/1812.06280.pdf">Yamada et al., 2020</a>) shown in TensorFlow the circled blue arc of dots represents years, and the circled red cluster groups English football clubs!</p>

<h3>CBOW vs. Skip-Gram</h3>

<p>Let’s have a look at an example sentence: “Neural word representations have proven useful in Natural Language Processing tasks due to their ability to efficiently model complex semantic and syntactic word relationships.” (<a href="https://arxiv.org/pdf/1511.06388.pdf">Trask et al. 2015</a>). Now let’s pick a focus word from the sentence: “model”.</p>

<p>In the Continuous Bag-of-Words architecture (CBOW), we will now look at <code>n</code> number of words that precede and follow our focus word “model”. Let’s say <code>n=5</code>. Our input for the model are the context words “to” “their” “ability” “to” “efficiently” “complex” “semantic” “and” “syntactic” “word”, and we want to train our model to output “model”.</p>

<p>In the Skip-Gram architecture, our input is the focus word and we want to maximise the probability of outputting the context words.</p>

<p>You can imagine that giving a machine the input “model” won’t immediately produce the output “to” “their” “ability” “to” “efficiently” “complex” “semantic” “and” “syntactic” “word”.</p>

<p>To get better results, Mikolov et al. describe a subsampling method to counter the imbalance in a data set between frequent words (“to”, “and”) that are not telling us anything unique about our input and rare words which are more valuable in guiding the model.</p>

<p>Other words we want to filter from our data-set include variations of a same word: “word”, “words”, “wording” (or “function”, “myfunction”, “#function”) have the same meaning, but a different morphological structure (different spelling). Humans understand this but a machine doesn’t until we train it to recognise the stem of a word. The process of reducing each word to its stem, or lemma, is called lemmatisation. All possible derivations of a word’s lemma make up the <em>lexeme</em> of this word. </p>

<p>What comes to mind when talking about <em>function</em>? Are you thinking about <em>function</em> (verb) as in <em>operate</em> or <em>function</em> (noun) as in <em>gathering</em>? We need to assign each meaning of the word to their own <em>lexical unit</em>.</p>

<p>I now know that a word like function, a word with multiple meanings, is called a <em>polysemous</em> (or <em>polysemic</em>) word. In the Skip-Gram model, each word is defined based on the characters that compose it and is assigned a vector, a direction of meaning, capturing their semantic and syntactic information (<a href="https://pdfs.semanticscholar.org/2109/bf2265bea1933667da9baf207e13cc7fb016.pdf">Maas &amp; Ng, 2010</a>). That means that <em>function</em>, <em>ritual</em> and <em>myth</em> are assigned an individual vector, but also <em>functions</em>, <em>functional</em> and <em>functionality</em>, because these words are all spelled differently. What works as intended for monosemous words causes problems for polysemous words.</p>

<p>Another issue is that proximity can lead the machine to interpret relatedness as similarity. These attributes are not interchangeable: while <em>good</em> and <em>bad</em> are closely related, they do not at all mean the same thing. </p>

<h3>sense2vec</h3>

<p>The work by <a href="http://dl.acm.org/citation.cfm?id=1857999.1858012">Reisinger &amp; Mooney (2010)</a> takes a new approach on vector-space <em>word-sense</em> disambiguation by first clustering the contexts in which a word appears to then encode multiple meanings, or <em>senses</em>, for polysemous words.
The methods of <a href="https://www.aclweb.org/anthology/P15-2003.pdf">Chen et al. (2015)</a> or <a href="https://www.aclweb.org/anthology/P15-1173.pdf">Rothe and Schütze (2015)</a> use Princeton’s <a href="https://wordnet.princeton.edu">WordNet</a> to find the number of definitions a word has instead of looking at a preset number of clusters. These additional steps improve the quality of the output, but at the cost of heavier computation (<a href="https://arxiv.org/pdf/1511.06388.pdf">Trask, 2015</a>). </p>

<p>Sense2vec uses POS tagging. Part-of-speech tagging, also known as grammatical tagging or word-category disambiguation, is the identification of words as nouns, proper nouns, verbs, adverbs, adjectives, interjections, etc. (<a href="https://arxiv.org/pdf/1706.02496.pdf">Horn, 2017</a>). Hand in hand with POS tagging, sense2vec also does named-entity resolution (NER) to identify people’s full name or the name of a corporation as a single entity instead of as multiple words.</p>

<p>The model also features <em>sentiment</em> disambiguation. It can detect whether a word was meant sarcastically! </p>

<h3>Finding a dataset</h3>

<p>All these algorithms and models (I still use the terms interchangeably because <a href="https://www.quora.com/What-is-the-difference-between-an-algorithm-and-a-model-in-machine-learning">I don’t understand their relationship</a> — is an algorithm composed of models or does an algorithm turn into a model once it’s fed data?) have little effect without a relevant dataset. The machine can only learn if it has good reading material. Most corpora we looked at have millions of words. Wikipedia currently has about 3.5 billion words.</p>

<p>For the next stage in this research we will be looking for a suitable corpus, and then try to find the right model and algorithm.</p>

<p>It would be desirable to find or design a 3D vector-space word-sense map, similar to the one above from the wikipedia2vec example in TensorFlow, using all the features sense2vec has to offer. So far, we have only found <a href="https://explosion.ai/demos/sense2vec">this demo</a> using a dataset of Reddit comments and outputting information as a table.</p>

<hr />

<p>I want to end this note on a paragraph from <a href="https://www.theatlantic.com/magazine/archive/2011/03/mind-vs-machine/308386/"><em>The Atlantic</em> article</a> mentioned at the top. But first, some context. </p>

<p>One of the first programs capable of attempting the Turing Test was Joseph Weizenbaum’s ELIZA chatbot in the mid&#8211;1960s. <a href="https://99percentinvisible.org/episode/the-eliza-effect/">Here’s a good podcast about the topic</a>. The former MIT professor is considered one of the fathers of AI. ELIZA would identify a keyword in the user’s message and repeat it back as a question, as a therapist would. If it couldn’t do that, it would simply ask “how does that make you feel?” or say “please go on”. ELIZA’s success at convincingly mimicking a human interaction was so impressive to Weizenbaum that he pulled the plug on the project and turned into the harshest critic of the technology he helped to create. </p>

<p>Now we’re in 1989. Mark Humphrys, a 21-year-old University College Dublin undergraduate, published <em>MGonz</em>, also a chatbot.</p>

<blockquote>
<p>Humphrys’s twist on the Eliza paradigm was to abandon the therapist persona for that of an abusive jerk; when it lacked any clear cue for what to say, MGonz fell back not on therapy clichés like “How does that make you feel?” but on things like “You are obviously an asshole,” or “Ah type something interesting or shut up.” It’s a stroke of genius because, as becomes painfully clear from reading the MGonz transcripts, argument is stateless — that is, unanchored from all context […]. Each remark after the first is only about the previous remark. If a program can induce us to sink to this level, of course it can pass the Turing Test.</p>
</blockquote>

<hr />

<p>Logging out,
G</p>

<h1><a class="logo back" href="/"><i class="far fa-arrow-circle-left"></i> Back</a></h1>
  
</section>

<?php include "../../footer.php" ?>