<%@ Page Explicit="True" Language="VB" Debug="True" %>
<html>
<body>
<% 
Dim Amount As Single
Dim Quarters As Integer
Amount = 3.85
Quarters = 0
Do
  Quarters = Quarters + 1
  Amount = Amount - .25
Loop While Amount >= .25
%>
<p>You can buy <%=Quarters%> $.25 gumballs</p>	
</body>
</html>