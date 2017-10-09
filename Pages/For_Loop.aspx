<%@ Page Explicit="true" Language="VB" Debug="true" %>
<html>
<head><title> Hello and Welcome</title></head>
<body>
<center>
<% Dim TextSize As Integer %>
<% For TextSize = 1 To 7 %>
<font size=<%=TextSize%>>
Hello and Welcome</br>
</font>
<% Next %>
<% For TextSize = 6 To 1 Step -1 %>
<font size=<%=TextSize%>>
Hello and Welcome</br>
</font>
<% Next %>
</center>
</body>
</html>