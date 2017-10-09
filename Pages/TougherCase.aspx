<%@ Page Explicit="True" Language="VB" Debug="True" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script runat="server">

</script>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Tougher Case</title>
</head>
<body>
<%
    Dim Grade As Integer
    Dim LetterGrade As String
    Randomize()
    Grade = Int(Rnd() * 100) + 1 'Random number between 1 and 100.
%>
<p>Your Grade is: <% =Grade %>.</p>
<%  Select Case Grade
    Case Is >= 90
    LetterGrade = "A"%>
<p>You got an A!! Congratulations.</p> 
<% Case Is >= 80
        LetterGrade = "B"%>
<p>You got a B. Good Job.</p>
<% Case Is >= 70
        LetterGrade = "C"%>
<p>You got a C. Good but could be better.</p>
<%  Case Is >= 60
        LetterGrade = "D"%>
<p>You got a D. Study and work harder for next time.</p>
<%  Case Else
        LetterGrade = "F"%>
<p>You Failed. An F is unacceptable</p>            
<% End Select%>   
    
</body>
</html>
