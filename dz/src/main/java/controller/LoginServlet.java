package controller;

import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import javax.swing.JOptionPane;

import entity.User;
import service.UserService;

@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	// 创建UserService对象
	private UserService userService = new UserService();

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		/*
		 * 1.获取参数
		 */
		String username = request.getParameter("userName");
		String password = request.getParameter("pwdName");

		// 调用userService对象中的login方法验证登录用户
		User user = userService.login(username, password);
		System.out.println(user == null);

		if (user != null) {
			// 用户不为空，代表用户存在，成功登录
			System.out.println("登录成功");

			/*
			 * 创建一个session用来存储user
			 */
			HttpSession session = request.getSession();
			session.setAttribute("user", user);

			// 登录成功后，通过转发跳转到新的界面
			request.getRequestDispatcher("loginSuccess.jsp").forward(request, response);
		} else {
			// user为空，代表用户不存在
			System.out.println("登陆失败");
			// 登录失败通过转发，在回到登录界面继续进行登录
			String script = "<script>alert('Username or password is incorrect, please log back in!!!');location.href='index.jsp'</script>";
			response.getWriter().println(script);
			// request.getRequestDispatcher("index.jsp").forward(request, response);// 跳转
		}

	}

}
