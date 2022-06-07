package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import entity.User;
import utils.DBUtils;

/*
 * �û����ݿ�Ĵ���
 */
public class UserDao {

	/*
	 * �����û�������user
	 */
	public User login(String username) throws Exception {

		// ��ȡ���ݿ��������
		Connection connection = DBUtils.getConnection();

		// ����statement��ִ��sql
		String sql = "SELECT * FROM user WHERE username = ? ";
		PreparedStatement statement = connection.prepareStatement(sql);
		statement.setString(1, username);
		// ��ȡ���ݼ�
		ResultSet resultSet = statement.executeQuery();

		// ����һ���յ�user���ڽ��ղ�ѯ��������
		User user = null;

		// ��������
		while (resultSet.next()) {
			user = new User();
			user.setUsername(resultSet.getString("username"));
			user.setPassword(resultSet.getString("password"));
			System.out.println(user);
		}

		// �ر���Դ
		DBUtils.close(resultSet, statement, connection);

		return user;
	}

	/*
	 * �û�ע��
	 */
	public int register(User user) throws SQLException{
		// ��ȡ����
		Connection connection = DBUtils.getConnection();

		String sql = "INSERT INTO user (username,password) VALUES (?,?)";
		PreparedStatement statement = connection.prepareStatement(sql);
		statement.setString(1, user.getUsername());
		statement.setString(2, user.getPassword());
		// ִ��sql��䣬����ɹ�������ݣ�row>0
		int row = statement.executeUpdate();

		// �ر���Դ
		DBUtils.close(null, statement, connection);

		// ��������
		return row;
	}

}

