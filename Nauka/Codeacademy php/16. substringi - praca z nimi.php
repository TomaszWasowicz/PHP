<?php

// haystack - stóg siana,to zmienna $story,
// needle - igła w stogu siana, to string "like"

$story = "I was like, \"Dude, like just tell me what you like think because 
like everyone else is like being totally honest, and like I just want to know 
what you like think.\" So like I don't know...";

echo substr_count($story, "like");

$essay_one = "I really enjoyed the book. I thought the characters were really interesting. 
The plot of the novel was really engaging. I really felt the characters' emotions. They were 
really well-written. I really wish the ending had been different though.";

$essay_two = "Obviously this is a really good book. You obviously would not 
have made us read it if it wasn't. I felt like the ending was too obvious though. 
It was so obvious who did it right away. I think the thing with the light was obviously 
a metaphor for life. It would have been better if the characters were less obvious about their secrets.";

// Write your code below:
echo substr_count($essay_one, "really");
echo substr_count($essay_two, "obvious");

