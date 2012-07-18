<div id="strunkified">
	<?

	// Try looking at words used too frequently.

	$elements = array(
			array("alright", 2, "Properly written as two words - <em>all right</em>"),
			array("aggravate", 1, "To <em>aggravate (v.)</em> is to make worse an already bad situation. Did you mean <em>irritate</em>?"),
			array("irritate", 1, "To <em>irritate (v.)</em> is to annoy. Did yo umean <em>aggravate</em>?"),
			array("allude", 1, "To <em>allude (v.)</em> is to refer, as in 'allude to a previous chapter.' Did you mean elude?"),
			array("elude", 1, "To <em>elude (v.)</em> is to escape, as in 'elude a persuer.' Did you mean allude?"),
			array("allusion", 1, "An <em>allusion (n.)</em> is a refernce to something else. Did you mean illusion?"),
			array("illusion", 1, "An <em>illusion (n.)</em> is false perception. Did you mean allusion?"),
			array("alternate", 1, "To <em>alternate (v.)</em> means to take every other in a set of many things. An <em>alternate (n.)</em> is the other in a set of two things. If there are many choices, consider <em>alternative</em>."),
			array("not", 1, "If used to negate an adjective, <em>not</em> is usually a weak means of evasion. Prefer positive forms (eg '<em>not stupid</em>' &raquo; '<em>intelligent</em>', '<em>not meaningful</em>' &raquo; '<em>meaningless</em>', '<em>there is not a single way</em>' &raquo; '<em>there are no ways</em>')"),
			array("nature", 1, "If used in a sense other than to mean plants and animals, is usually superfluous. '<em>he has a friendly nature</em>' &raquo; '<em>he is friendly</em>'"),
			array("among", 1, "If more than two persons or things are involved and each is considered individually, use <em>between</em> (eg '<em>and agreement between four people</em>') otherwise use among (eg '<em>a friendly competition among brothers</em>')"),
			array("between", 1, "If more than two persons or things are involved and each is considered individually, use <em>between</em> (eg '<em>and agreement between four people</em>') otherwise use among (eg '<em>a friendly competition among brothers</em>')"),
			array("and/or", 2, "Refactor. ('<em>He will take the blame and/or credit</em>' &raquo; '<em>He will take the blame or the credit or both</em>')"),
			array("anticipate", 1, "To anticipate is to take an action in expectation of - for a simple expectation use <em>expect</em> (eg '<em>He anticipated traffic but found none</em>' &raquo; '<em>He expected traffic but found none</em>)"),
			array("anticipating", 1, "To anticipate is to take an action in expectation of - for a simple expectation use <em>expect</em> (eg '<em>He anticipated traffic but found none</em>' &raquo; '<em>He expected traffic but found none</em>)"),
			array("anticipated", 1, "To anticipate is to take an action in expectation of - for a simple expectation use <em>expect</em> (eg '<em>He anticipated traffic but found none</em>' &raquo; '<em>He expected traffic but found none</em>)"),
			array("regard", 1, "If <em>being</em> comes after <em>regard ... as</em> it is not appropriate. (eg '<em>He was regarded as being the best physician</em>' &raquo; '<em>He was regarded as the best physician</em>)"),
			array("regarded", 1, "If <em>being</em> comes after <em>regard ... as</em> it is not appropriate. (eg '<em>He was regarded as being the best physician</em>' &raquo; '<em>He was regarded as the best physician</em>)"),
			array("can", 1, "<em>Can (v.)</em> means 'am/is/are able.' Not to be confused with <em>may</em>, which grants permission. (eg '<em>Only then can you leave.</em>' &raquo; '<em>Only then may you leave.</em>')"),
			array("fun", 1, "<em>Fun (n.)</em> is a noun, not an adjective. (eg '<em>A fun activity</em>' &raquo; '<em>An amusing activity</em>')"),
			array("funner", 2, "<em>Fun (n.)</em> is a noun, not an adjective. (eg '<em>The other game was funner</em>' &raquo; '<em>The other game was more amusing/interesting/challenging/entertaining</em>')"),
			array("funnest", 2, "<em>Fun (n.)</em> is a noun, not an adjective. (eg '<em>The funnest ride</em>' &raquo; '<em>The most exciting ride</em>')"),
			array("case", 1, "Often unnecessary when used in the sense of 'in the case of.' (eg '<em>In the case of the second, there was no space</em>' &raquo; '<em>The second one had no space</em>')"),
			array("cases", 1, "Often unnecessary when used in the sense of 'in the case of.' (eg '<em>In many cases, the dogs lacked water</em>' &raquo; '<em>Many of the dogs lacked water</em>')"),
			array("certainly", 1, "A weak intensifier. Omit if possible."),
			array("character", 1, "Lends itself to vagueness. (eg '<em>There was a calm character to his attitude</em>' &raquo; '<em>He was calm</em>')"),
			array("claim", 1, "Not a synonym of <em>declare</em>. (eg '<em>I claimed I had completed the work</em>' &raquo; '<em>I declared I had completed the work</em>')"),
			array("claimed", 1, "Not a synonym of <em>declare</em>. (eg '<em>I claimed I had completed the work</em>' &raquo; '<em>I declared I had completed the work</em>')"),
			array("compare", 1, "If comparing <em>with</em> or <em>to</em>: <em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("comparing", 1, "If comparing <em>with</em> or <em>to</em>: <em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("consider", 1, "Not to be followed by <em>as</em> unless a synonym for <em>discussed</em> (eg '<em>They considered him as an expert</em>' &raquo; '<em>They considered him an expert</em>')"),
			array("considered", 1, "Not to be followed by <em>as</em> unless a synonym for <em>discussed</em> (eg '<em>They considered him as an expert</em>' &raquo; '<em>They considered him an expert</em>')"),
			array("considering", 1, "Not to be followed by <em>as</em> unless a synonym for <em>discussed</em> (eg '<em>They considered him as an expert</em>' &raquo; '<em>They considered him an expert</em>')"),
			array("contact", 1, "A vague word. Try instead: call, meet, get in touch with."),
			array("contacted", 1, "A vague word. Try instead: called, met, got in touch with."),
			array("contacting", 1, "A vague word. Try instead: calling, meeting, getting in touch with."),
			array("currently", 1, "Usually redundant. (eg '<em>We are currently reviewing your submission</em>' &raquo; '<em>We are reviewing your submission</em>')"),
			array("data", 1, "Traditionally considered as plural. (eg '<em>This data is</em>' &raquo; '<em>These data are</em>')"),
			array("disinterested", 1, "Means 'impartial' not 'uninterested'"),
			array("effect", 1, "<em>Effect (v.)</em> is to prompt or incur, <em>effect (n.)</em> is a result. Not to be used descriptively, eg 'a wonderful effect' 'a subtle effect'"),
			array("enthused", 1, "Not recommended. Try <em>enthusiastic</em>."),
			array("fact", 1, "A fact is something directly verifiable. If it's a matter of opinion or judgment, it's not a fact."),
			array("facility", 1, "Schools, jails, hospitals and other such buildings are better described as such."),
			array("factor", 1, "Vague and contributes to wordiness. (eg '<em>Color was a major factor in the decision</em>' &raquo; '<em>We chose it mainly because of its color</em>')"),
			array("farther", 1, "<em>Farther</em> is to be used when discussing distance, ie '<em>He threw the ball farther.</em>' Did you mean <em>further</em>?"),
			array("further", 1, "<em>Further</em> is to be used when discussing time or quantity, ie '<em>He took the discussion further away from ...</em>' Did you mean <em>farther</em>?"),
			array("feature", 1, "A nondescriptive word. Prefer to describe specific features. (eg '<em>Her soft features</em>' &raquo; '<em>Her round face and small nose</em>')"),
			array("features", 1, "A nondescriptive word. Prefer to describe specific features. (eg '<em>Her soft features</em>' &raquo; '<em>Her round face and small nose</em>')"),
			array("finalize", 1, "Wordy. Consider <em>complete</em> or <em>finish</em>"),
			array("finalized", 1, "Wordy. Consider <em>completed</em> or <em>finished</em>"),
			array("finalizing", 1, "Wordy. Consider <em>completing</em> or <em>finished</em>"),
			array("flammable", 1, "Unless you require complete clarity, the preferred word is <em>inflammable</em>"),
			array("folks", 1, "Vague. Specify which relatives."),
			array("fortuitous", 1, "Only for things that happen by chance. Not synonymous with <em>lucky</em> or <em>fortunate</em>"),
			array("however", 1, "A weak way to begin a sentence, when the meaning is 'on the other hand' or 'nevertheless.'"),
			array("imply", 1, "To <em>imply</em> is to suggest but not express directly. Did you mean <em>infer</em>?"),
			array("implying", 1, "To <em>imply</em> is to suggest but not express directly. Did you mean <em>infer</em>?"),
			array("implied", 1, "To <em>imply</em> is to suggest but not express directly. Did you mean <em>infer</em>?"),
			array("infer", 1, "To <em>infer</em> is to deduce through logic. Did you mean <em>imply</em>?"),
			array("inferring", 1, "To <em>infer</em> is to deduce through logic. Did you mean <em>imply</em>?"),
			array("inferred", 1, "To <em>infer</em> is to deduce through logic. Did you mean <em>imply</em>?"),
			array("insightful", 1, "Vague. What was the insight? At least consider '<em>perceptive</em>'"),
			array("interesting", 1, "Wordy, can often be omitted. Why was it interesting?"),
			array("irregardless", 1, "Not a word. You mean <em>regardless</em>"),
			array("finalize", 1, "Weak, inspecific. Try <em>Complete</em> or <em>approve</em>"),
			array("less", 1, "Less is used with things not countable, ie '<em>There is less milk than before.</em>' Did you mean <em>fewer</em>? (<em>Hint: if you used <strong>are</strong> as in 'there are many less' then you probably need fewer.</em>)"),
			array("literally", 1, "'Literally' is often used with a non-literal metaphor, eg '<em>He literally died.</em>' If he is not now medically deceased, try a reworking: '<em>He may as well have died,</em>' '<em>He froze in shock,</em>' or '<em>He collapsed.</em>'"),
			array("meaningful", 1, "Vague. How was it meaningful? (eg '<em>He made a meaningful contribution</em>' &raquo; '<em>His argument convinced us</em>')"),
			array("nauseous", 1, "Means 'sickening to contemplate.' So, 'I feel nauseous' is incorrect, it should be 'I feel nauseated.'"),
			array("nice", 1, "Should be a synonym of 'precise' or 'delicate' Otherwise, it can be a crutch word."),
			array("ongoing", 1, "Wordy. (eg '<em>An ongoing effort to reduce pollution</em>' &raquo; '<em>An effort to reduce pollution</em>')"),
			array("partially", 1, "Means 'to a certain degree' in the sense of a non-physical state. (eg '<em>Partially complete</em>' but '<em>Partly submerged</em>')"),
			array("personalized", 1, "Did you mean <em>personal</em>?"),
			array("personalize", 1, "Try describing what is personalized about it. (eg '<em>Personalize your writing</em>' &raquo; '<em>Write in a unique style</em>')"),
			array("personally", 1, "A weak way to begin a sentence."),
			array("possessed", 1, "Wordy when used as a synonym for 'had' or 'owned'"),
			array("possess", 1, "Wordy when used as a synonym for 'have' or 'own'"),
			array("regretful", 1, "Did you mean <em>regrettable</em>?"),
			array("relate", 1, "Try not to use this to describe a relationship between two people, eg '<em>We relate well to each other</em>'"),
			array("respective", 1, "Can often be omitted by reorganization."),
			array("respectively", 1, "Can often be omitted by reorganization."),
			array("foreseeable", 1, "The 'foreseeable' future is usually too vague. Try a specific time frame."),
			array("torturous", 1, "Should be reserved for things involving physical pain. Did you mean <em>tortuous</em>?"),
			array("tortuous", 1, "Mainly for things not involving physical pain. Did you mean <em>torturous</em>?"),
			array("very", 1, "Often a weak intesifier. Omit if possible."),
			array("really", 1, "Often a weak intesifier. Omit if possible."),
			array("awfully", 1, "Often a weak intesifier. Omit if possible."),
			array("bloody", 1, "Often a weak intesifier. Omit if possible."),
			array("dreadfully", 1, "Often a weak intesifier. Omit if possible."),
			array("extremely", 1, "Often a weak intesifier. Omit if possible."),
			array("quite", 1, "Often a weak intesifier. Omit if possible."),
			array("real", 1, "Often a weak intesifier. Omit if possible."),
			array("remarkably", 1, "Often a weak intesifier. Omit if possible."),
			array("totally", 1, "Often a weak intesifier. Omit if possible."),
			array("terribly", 1, "Often a weak intesifier. Omit if possible."),
			array("transpire", 1, "Wordy when used in the sense of 'happen' or 'come to pass'"),
			array("utilize", 1, "Wordy. Try 'use'"),
			array("utilized", 1, "Wordy. Try 'used'"),
			array("while", 1, "Avoid it as a synonym for 'however' or 'although'"),
			array("worthwhile", 2, "Vague. Why is it not worthwhile?"),
			array("would", 1, "Avoid when expressing habitual action. (eg '<em>He would make coffee every morning.</em>' &raquo; '<em>He made coffee every morning</em>')"),
	);

	$phrases = array(
			// Some common expressions where it should not contract, list before the contractions
			array("do you have", 0, ""),
	
			array("the question as to whether", 2, "Shorten to <em>whether</em>"),
			array("there is no doubt that", 2, "Shorten to <em>doubtless</em>"),
			array("used for * purposes", 2, "Shorten to <em>used for ____</em>"),
			array("he is a man who", 2, "Shorten to <em>he</em>"),
			array("in a hasty manner", 2, "Shorten to <em>hastily</em>"),
			array("this is a subject that", 2, "Shorten to <em>this subject</em>"),
			array("the reason why is that", 2, "Shorten to <em>because</em>"),
			array("the fact that", 2, "Remove in any way possible."),
			array("I am", 1, "Consider the contraction <em>I'm</em>"),
			array("can not", 1, "Consider the contraction <em>can't</em>"),
			array("I will", 1, "Consider the contraction <em>I'll</em>"),
			array("have not", 1, "Consider the contraction <em>haven't</em>"),
			array("will not", 1, "Consider the contraction <em>won't</em>"),
			array("you will", 1, "Consider the contraction <em>you'll</em>"),
			array("let us", 1, "Consider the contraction <em>let's</em> (except in the command form, as in '<em>Let us go!</em>')"),
			array("did not", 1, "Consider the contraction <em>didn't</em>"),
			array("they are", 1, "Consider the contraction <em>they're</em>"),
			array("we are", 1, "Consider the contraction <em>we're</em>"),
			array("he is", 1, "Consider the contraction <em>he's</em>"),
			array("what does", 1, "Consider the contraction <em>what's</em> (eg '<em>What's that mean?</em>')"),
			array("where does", 1, "Consider the contraction <em>where's</em>"),
			array("who is", 1, "Often superfluous. ('<em>Barack Obama, who is America's first President</em>' &raquo; '<em>Barack Obama, America's first President</em>' Otherwise, consider the contraction <em>who's</em>)"),
			array("I have", 1, "If not used to indicate the possession of something, consider the contraction <em>I've</em>"),
			array("you have", 1, "Consider the contraction <em>you've</em>"),
			array("where did", 1, "Consider the contraction <em>where'd</em>"),
			array("he would", 1, "Consider the contraction <em>he'd</em>"),
			array("is not", 1, "Consider the contraction <em>isn't</em>"),
			array("was not", 1, "Consider the contraction <em>wasn't</em>"),
			array("there is", 1, "Consider the contraction <em>there's</em>"),
			array("which was", 1, "When not beginning a question, ('<em>Which was the largest dinosaur?</em>') often superfluous. ('<em>The element Strontium, which was discovered in the 18th century, is ...</em>' &raquo; '<em>The element Strontium, discovered in the 18th century, is ...</em>')"),
			array("any body", 2, "If not used synonymously with 'any cadaver' then this should be written as one word, <em>anybody</em>"),
			array("as good or better", 2, "Rearrange, ('<em>The game was as good or better than any other he'd played</em>' &raquo; '<em>The game was at least as good as any other he'd played</em>')"),
			array("as to whether", 2, "Shorten to <em>whether</em>"),
			array("as yet", 2, "<em>Yet</em> is nearly always sufficient."),
			array("* doubt but", 2, "<em>But</em> is unnecessary. ('<em>I have no doubt but think that</em>' &raquo; '<em>I have no doubt that</em>')"),
			array("* help but", 2, "<em>But</em> is unnecessary. ('<em>I could not help but think that</em>' &raquo; '<em>I could not help thinking that</em>')"),
			array("could care less", 2, "The careless writer may omit the word <em>not</em>, but '<em>I could care less</em> makes little sense. Correct, '<em>I couldn't care less</em>'"),
			array("compare to", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("compared to", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("comparing * to", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("compare with", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("compared with", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("comparing * with", 1, "<em>Compare with</em> is used for similar objects in the same category, but <em>compare to</em> is used for objects in different categories. One compares the height of the Statue of Liberty <em>with</em> that of the Eiffel Tower, but compares it <em>to</em> the height of a person."),
			array("comprised of", 1, "Try <em>composed of</em> or <em>constitutes</em> instead."),
			array("due to", 1, "Synonymous with <em>attributable to</em>. Otherwise try, <em>through</em>, <em>because of</em>, or <em>owing to</em>"),
			array("each and every", 1, "Salesman's jargon. Avoid it."),
			array("* is a * that", 1, "Redundant. A simple rework can remove it. ('<em>John is a person who likes cheese.</em>' &raquo; '<em>John likes cheese.</em>' or '<em>Florida is a state that has a large hispanic population.</em>' &raquo; '<em>Florida has a large hispanic population</em>')"),
			array("* is a * who", 1, "Redundant. A simple rework can remove it. ('<em>John is a person who likes cheese.</em>' &raquo; '<em>John likes cheese.</em>' or '<em>Florida is a state that has a large hispanic population.</em>' &raquo; '<em>Florida has a large hispanic population</em>')"),
			array("* is an * that", 1, "Redundant. A simple rework can remove it. ('<em>John is a person who likes cheese.</em>' &raquo; '<em>John likes cheese.</em>' or '<em>Florida is a state that has a large hispanic population.</em>' &raquo; '<em>Florida has a large hispanic population</em>')"),
			array("* is an * who", 1, "Redundant. A simple rework can remove it. ('<em>John is a person who likes cheese.</em>' &raquo; '<em>John likes cheese.</em>' or '<em>Florida is a state that has a large hispanic population.</em>' &raquo; '<em>Florida has a large hispanic population</em>')"),
			array("more importantly", 1, "Unless used as an adverbial phrase, this is usually wordy."),
			array("most importantly", 1, "Unless used as an adverbial phrase, this is usually wordy. Try, 'Most important'"),
			array("in regards to", 1, "Technically, '<em>in regard to</em>' is proper."),
			array("* * like to do is", 2, "Wordy. '<em>I would like to...</em>'"),
			array("sense of false hope", 2, "You mean, a '<em>false sense of hope</em>'"),
			array("in terms of", 1, "Used for direct comparison of quantifiable relationships, eg '<em>Measuring code in terms of the number of lines.</em>' Not to be used otherwise."),
			array("kind of like", 1, "Wordy. ('<em>John is kind of like a flower.</em>' &raquo; '<em>John is like a flower..</em>')"),
			array("sort of like", 1, "Wordy. ('<em>John is sort of like a flower.</em>' &raquo; '<em>John is like a flower..</em>')"),
			array("are less", 2, "<em>Less</em> is used with uncountable things. Replace with <em>are fewer</em>."),
			array("one of the most", 2, "Weak, overused. It's either 'the most' or 'the thirdmost' or just remove it."),
			array("student body", 1, "Usually overly wordy."),
			array("the truth is", 2, "A poor way to begin a sentence."),
			array("the fact is", 2, "A poor way to begin a sentence."),
			array("try and", 1, "<em>Try to</em> is more proper"),
			array("most unique", 2, "<em>Unique (adj.)</em> means 'the only of its kind' so a thing can not be the 'most unique'"),
			array("very unique", 2, "<em>Unique (adj.)</em> means 'the only of its kind' so a thing can not be 'very unique'"),
			array("verbal agreement", 1, "<em>Verbal (adj.)</em> means 'relating to words.' Try 'oral agreement'"),
			array("worth while", 1, "Vague. Why is it not worth while?"),
			array("is something", 1, "Depending on the usage, can be wordy. ('<em>A flower is something that blooms.</em>' &raquo; '<em>Flowers bloom.</em>')"),
	);

	function strip_word($input)
	{
		$word_stripped = $input;
		while (strlen($word_stripped) && (ord(strtolower($word_stripped)) < ord('a') || ord(strtolower($word_stripped)) > ord('z')))
			$word_stripped = substr($word_stripped, 1);

		while (strlen($word_stripped) && (ord(strtolower(substr($word_stripped, -1))) < ord('a') || ord(strtolower(substr($word_stripped, -1))) > ord('z')))
			$word_stripped = substr($word_stripped, 0, -1);

		return $word_stripped;
	}

	function array_append(&$array, $values, $insert)
	{
		for ($i = 0; $i < count($values); $i++)
		{
			array_push($array, $values[$i]);

			if (count($values) > 1 && $i < count($values)-1)
				array_push($array, $insert);
		}
	}

	$text = explode(" ", $_POST['text']);

	$text2 = array();
	for ($i = 0; $i < count($text); $i++)
		array_append($text2, explode("\r\n", $text[$i]), "\n");
	$text = $text2;

	$text2 = array();
	for ($i = 0; $i < count($text); $i++)
		array_append($text2, explode("\r\n", $text[$i]), "\n");
	$text = $text2;

	$text2 = array();
	for ($i = 0; $i < count($text); $i++)
		array_append($text2, explode("\t", $text[$i]), "\t");
	$text = $text2;

	for ($i = 0; $i < count($text); $i++)
	{
		$output = $text[$i];

		$word_stripped = strip_word($output);

		$warninglevel = 0;
		$messages = array();

		if ($word_stripped == "")
		{
			echo nl2br("$output ");
			continue;
		}

		$phrase_matches = true;
		foreach ($phrases as $phrase)
		{
			$phrase_words = explode(" ", $phrase[0]);
			$phrase_matches = true;

			$phrase_output = "";

			$j = 0;
			for ($j = 0; $j < count($phrase_words) && $j+$i < count($text); $j++)
			{
				$phrase_output .= $text[$i+$j] . " ";

				$phrase_word_stripped = strip_word($text[$i+$j]);
				if ($phrase_words[$j] == "*")
					continue;

				if (strcasecmp($phrase_words[$j], $phrase_word_stripped) != 0)
				{
					$phrase_matches = false;
					break;
				}
			}

			if ($j != count($phrase_words))
				$phrase_matches = false;

			if ($phrase_matches)
			{
				$warninglevel = max($phrase[1], $warninglevel);
				array_push($messages, $phrase[2]);
				$output = trim($phrase_output);
				$i += count($phrase_words)-1;
				break;
			}
		}

		if (!$phrase_matches)
		{
			foreach ($elements as $element)
			{
				if (strcasecmp($word_stripped, $element[0]) == 0)
				{
					$warninglevel = max($element[1], $warninglevel);
					array_push($messages, $element[2]);
				}
			}
		}

		if ($warninglevel)
		{
			if ($warninglevel == 1)
				echo "<span class='warning' id='popuptip'><a href='#'>";
			else
				echo "<span class='error' id='popuptip'><a href='#'>";
		}

		echo nl2br($output);

		if ($warninglevel)
		{
			echo "<span>";
			foreach ($messages as $message)
				echo "<p>$message</p>";
			echo "</span></a></span>";
		}

		echo " ";
	}
	?>
</div>
