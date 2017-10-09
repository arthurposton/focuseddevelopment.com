<%@ Page Explicit="true" Language="VB" Debug="True"%>
<html>
<body>
<%
Dim OuterLoop, InnerLoop
For OuterLoop = 1 To 3
	For InnerLoop = 1 To 5
%>
<p>
OuterLoop = <% =OuterLoop %>, InnerLoop = <% =InnerLoop %>
</p>
<% 
	Next
Next
%>
</body>
</html>