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
       
	// ����UserService����
	private UserService userService = new UserService();

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		// ��ȡǰ���������������
		String pwd1 = request.getParameter("pwdName1");
		String pwd2 = request.getParameter("pwdName2");
		
		// ����user���󣬽�ǰ����������ݴ�������
		User user = new User();			
		user.setUsername(request.getParameter("userName"));
		
		if(pwd1.equals(pwd2)){
			// �ж����������Ƿ���ͬ
			user.setPassword(pwd1);
			
			// ����user������ݽ���ע��
			int row = userService.register(user);
			System.out.println("�ı��������"+row);
			
			// ���ؽ������������ע����Ϣrow���ڼ�
			if (row > 0) {
				System.out.println("ע��ɹ�");
				//��תע��ɹ�����
				request.getRequestDispatcher("registerSuccess.jsp").forward(request, response);
			} else {
				//��תע����沢��ʾ������Ϣ
				System.out.println("ע��ʧ��");
				request.getRequestDispatcher("register.jsp").forward(request, response);
			}
			
		}else {
			// �����������벻ͬ
			System.out.println("�������벻ͬ����¼ʧ��");
			request.getRequestDispatcher("register.jsp").forward(request, response);
		}
		
	}

}


