<html>
<body>
<%!
long fact(long n) {
if(n==0)
return 1;
else
return n*fact(n-1);
}
%>
<%
String str = request.getParameter("val");
long n = Long.parseLong(str);
long result = fact(n);
%>
<b>Factorial value: </b> <%=result %>
</body>
<html>
