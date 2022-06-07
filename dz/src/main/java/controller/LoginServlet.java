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

	// ����UserService����
	private UserService userService = new UserService();

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		/*
		 * 1.��ȡ����
		 */
		String username = request.getParameter("userName");
		String password = request.getParameter("pwdName");

		// ����userService�����е�login������֤��¼�û�
		User user = userService.login(username, password);
		System.out.println(user == null);

		if (user != null) {
			// �û���Ϊ�գ������û����ڣ��ɹ���¼
			System.out.println("��¼�ɹ�");

			/*
			 * ����һ��session�����洢user
			 */
			HttpSession session = request.getSession();
			session.setAttribute("user", user);

			// ��¼�ɹ���ͨ��ת����ת���µĽ���
			request.getRequestDispatcher("loginSuccess.jsp").forward(request, response);
		} else {
			// userΪ�գ������û�������
			System.out.println("��½ʧ��");
			// ��¼ʧ��ͨ��ת�����ڻص���¼����������е�¼
			String script = "<script>alert('Username or password is incorrect, please log back in!!!');location.href='index.jsp'</script>";
			response.getWriter().println(script);
			// request.getRequestDispatcher("index.jsp").forward(request, response);// ��ת
		}

	}

}
