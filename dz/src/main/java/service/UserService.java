package service;

import java.sql.SQLException;

import dao.UserDao;
import entity.User;

public class UserService {
	// ����UserDao����
	private UserDao userDao = new UserDao();
	
	/*
	 * ��¼����
	 */
	public User login(String username, String password) {
		// ����һ���û�ʵ���࣬���ڽ��շ��ص�user
		User user = null;
		try {
			// ����userDao�з��������û�����ѯ�Ƿ���ڸ��û�
			user = userDao.login(username);
			
			if (!user.getPassword().equals(password)) {
				// ���벻���ʱ��user��Ϊnull
				System.out.println("���벻��");
				user = null;
			}
		} catch (Exception e) {
			e.printStackTrace();
		}

		// ����user����
		return user;
	}

	/*
	 * �û�ע��
	 */
	public int register(User user) {
		// ���ȶ���row=0���������û�ע�ᣬrow>0,���û��ע�᷵��0
		int row = 0;
		try {
			row = userDao.register(user);
		} catch (SQLException e) {
			e.printStackTrace();
		}		
		return row;
	}

}

