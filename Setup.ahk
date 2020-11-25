InputBox, UserInput, Insta lock LOL, voer de naam in van de champion., ,200 ,160 
if !ErrorLevel
	champ = %UserInput%
	MsgBox, Script staat aan, de Champion is "%champ%."
	$F6::
	Send, %champ%
	Send, {ENTER}