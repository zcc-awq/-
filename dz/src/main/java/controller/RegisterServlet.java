package controller;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import entity.User;
import service.UserService;

@WebServlet("/RegisterServlet")
public class RegisterServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
	// 创建UserService对象
	private UserService userService = new UserService();

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		// 获取前端输入的两次密码
		String pwd1 = request.getParameter("pwdName1");
		String pwd2 = request.getParameter("pwdName2");
		
		// 创建user对象，将前端输入的内容存入里面
		User user = new User();			
		user.setUsername(request.getParameter("userName"));
		
		if(pwd1.equals(pwd2)){
			// 判断密码输入是否相同
			user.setPassword(pwd1);
			
			// 根据user里的内容进行注册
			int row = userService.register(user);
			System.out.println("改变的行数："+row);
			
			// 返回结果，产生几个注册信息row等于几
			if (row > 0) {
				System.out.println("注册成功");
				//跳转注册成功界面
				request.getRequestDispatcher("registerSuccess.jsp").forward(request, response);
			} else {
				//跳转注册界面并提示错误信息
				System.out.println("注册失败");
				request.getRequestDispatcher("register.jsp").forward(request, response);
			}
			
		}else {
			// 两次输入密码不同
			System.out.println("两次密码不同，登录失败");
			request.getRequestDispatcher("register.jsp").forward(request, response);
		}
		
	}

}


