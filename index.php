<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>The Strunkifier</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
	<div id="header">
		<h1>The Strunkifier</h1>
		<em>Strunkify Your Life</em>
	</div>

	<?
	if (array_key_exists('text', $_POST))
	{
		?><span class="quotesleft">&ldquo;</span><?
		include 'strunkify.php';
		?><span class="quotesright">&rdquo;</span><br clear="both"><?
	}
	?>
	<form id="inputform" action="." method="post">
		<textarea name="text" cols="80" rows="20"><? echo $_POST['text']; ?></textarea>
		<br />
		<br />
		<input type="submit" value="Strunkify!" />
	</form>
	<p><em><strong>Why Strunkify?</strong></em> - William Strunk Jr. was an English professor at Cornell around the turn of the century. He wrote a small textbook for the students of his English class. One of these students was E. B. White, who would later become a writer at <em>The New Yorker</em> and the author of <em>Stuart Little</em> and <em>Charlotte's Web</em>. White eventually <a href="http://www.amazon.com/Elements-Style-Fourth-William-Strunk/dp/020530902X">published Strunk's book</a> and it became a widely used English style guide. The book sets out guidelines on how to be a clearer, more concise writer, with brevity and the reduction of unnecessary language as its main goals. This page is a utility which detects and warns about a number of problematic words and phrases that Strunk outlined in his book.</p>
	<p><em><strong>How do I use the Strunkifier?</strong></em> - The Strunkifier is not a spell checker. It won't tell you what your writing should look like. It won't even identify the problem correctly a lot of the time. It only looks for commonly misused words or phrases and highlights them for you. When you mouse over a highlighted word, a box will appear showing you why the word sometimes causes problems and how to fix it. Yellow highlights are for things that may not be a problem or for stylistic choices like contractions. The Strunkifier can't understand the context of a word, so many times you can safely ignore it. Red highlights on the other hand are things that are universally poor choices and you should definitely fix them.</p>
	<p><em><strong>What will the Strunkifier suggest I fix? How can I fix the things it flags?</strong></em> - The Strunkifier finds and highlights commonly misused words. It's up to you to determine if your usage of the word is improper and how to improve it. I've tried to provide examples to help clarify what needs to be corrected. If this is not enough, try searching for the word or phrase using Google, there are many good websites on the topic. Some that I recommend are:
		<ul>
			<li><a href="http://public.wsu.edu/~brians/errors/errors.html">Paul Brians: Common Errors in English Usage</a></li>
			<li><a href="http://englishplus.com/grammar/mistcont.htm">English Plus: Common Mistakes and Tricky Choices</a></li>
			<li><a href="http://en.wikipedia.org/wiki/List_of_commonly_misused_English_words">Wikipedia: List of commonly musused English words</a></li>
		</ul>
	</p>
	<p><em><strong>I don't like Strunk or White and I disagree with the things presented in The Elements Of Style.</strong></em> - Okay. Then, don't use the Strunkifier. I'm hardly a linguist, I'm a computer programmer who agrees with Strunk that short writing is the best writing. If you'd like to explain to me why one choice or another that I made with the Strunkifier is a poor one, I'd love to hear as I'm interested in the English language as a layman. If I made any faux pas then I'd be happy to correct it.</p>

	<p style="font-size: small; text-align: center;">Written by Jorge "Vino" Rodriguez. [<a href="mailto:bs.vino@gmail.com">email</a> | <a href="https://twitter.com/vinobs">tweet</a> | <a href="http://www.facebook.com/bsvino">like</a> | <a href="http://www.google.com/profiles/bs.vino">plus</a> | <a href="/">home</a>] [<a href="https://github.com/BSVino/Strunkifier">Strunkifier on Github</a>]</p>
</div>
</body>
</html>
