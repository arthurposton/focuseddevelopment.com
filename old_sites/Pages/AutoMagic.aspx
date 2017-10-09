<%@ Page Explicit="true" Language="VB" Debug="true"%>
<html>
<head><title>Welcome</title></head>
<body>
<h1>Hello and Welcome to my site.</h1>
<p>We re happy you came to visit us.</p>
<h3>Important Information:</h3>
<%If Today < CDate("12/15/2007") Then%>
<p>Don t forget about our contest - sign in with our
Guest Book by December 1st and get a chance to win
$100 cash in our Guest Book drawing!</p>
<%ElseIf Today = CDate("12/25/2007") Then%>
<p>Today s the last day you can sign in with our
Guest Book for a chance to win $100 cash. Don t
put it off a moment longer!</p>
<%Else%>
<p>Our drawing to win $100 cash by signing in with
our Guest Book is Officially Over. Keep watching!
We ll be announcing the winner soon...</p>
<%End If%>
</body>

</html>