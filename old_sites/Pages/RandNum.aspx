<%@ Page Explicit="True"  Language="VB" Debug="True"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script runat="server">

</script>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head runat="server">
    <title>Lottery Numbers</title>
</head>
<body>
    <center><span style="font-size: 24pt; color: #66ff00; font-family: Verdana">
	Lottery Numbers</span></center><br />
    <center><%
        Dim LotteryNumber1, LotteryNumber2, LotteryNumber3, LotteryNumber4, LotteryNumber5 As Integer
                
                Randomize()
                LotteryNumber1 = Int(Rnd() * 59) + 1
              
                Randomize()
                LotteryNumber2 = Int(Rnd() * 59) + 1
              
                Randomize()
                LotteryNumber3 = Int(Rnd() * 59) + 1
                
                Randomize()
                LotteryNumber4 = Int(Rnd() * 59) + 1
        
                Randomize()
                LotteryNumber5 = Int(Rnd() * 59) + 1
                
                Dim PowerBall As Integer
                Randomize()
                PowerBall = Int(Rnd() * 39) + 1
    %>
    <% =LotteryNumber1%>
    <% =LotteryNumber2%>
    <% =LotteryNumber3%>
    <% =LotteryNumber4%>
    <% =LotteryNumber5%>
    <% =PowerBall%></center>
    <br />
    <br />
    <center><p>This page is for entertainment purposes only.</p></center>
</body>
</html>
