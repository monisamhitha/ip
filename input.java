importjavax.servlet.*; 
importjavax.servlet.http.*; 
importjava.io.*; 
public class input extends HttpServlet { 
public void doPost(HttpServletRequest request,HttpServletResponse response) { 
PrintWriter out; 
int principal=Integer.parseInt(request.getParameter("principal")); 
int years=Integer.parseInt(request.getParameter("years")); 
int interest=Integer.parseInt(request.getParameter("interest")); 
try { 
out=response.getWriter(); 
out.println("<html><head><title>Order</title></head><body>");
out.println("amount is"+principal+"years"+years+"interest is"+interest+".Simple Interest is Rs."+(principal*years*interest/100)+"."); 
out.println("</body></html>"); 
} 
catch(Exception e){ } 
} 
}

