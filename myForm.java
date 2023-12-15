import javax.servlet.*; 
import javax.servlet.http.*; 
import java.io.*; 
public class myForm extends HttpServlet { 
public void doPost(HttpServletRequest request,HttpServletResponse response) { 
PrintWriter out; 
int cost=Integer.parseInt(request.getParameter("cost")); 
int quantity=Integer.parseInt(request.getParameter("quantity")); 
String m=request.getParameter("item"); 
try { 
out=response.getWriter(); 
out.println("<html><head><title>Order</title></head><body>");
out.println("Your Order for "+m+" of cost "+cost+" is accepted. Your total Bill is Rs."+cost*quantity+".");
out.println("</body></html>"); 
} 
catch(Exception e){ } 
} 
}
