package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 * ���ݿ��������
 * */
public class DBUtils {

	// ��������
	static {
		try {
			Class.forName("com.mysql.jdbc.Driver");
		} catch (ClassNotFoundException e) {
			e.printStackTrace();
		}
	}

	/**
	 * ��ȡ����
	 */
	public static Connection getConnection() throws SQLException {

		String url = "jdbc:mysql://localhost:3306/javaweb?characterEncoding=UTF-8&&useSSL=false";
		Connection connection = DriverManager.getConnection(url, "root", "123456");
		return connection;
	}

	// �ر���Դ
	public static void close(ResultSet resultSet, Statement statement, Connection connection) throws SQLException {

		if (resultSet != null) {
			resultSet.close();
		}
		if (statement != null) {
			statement.close();
		}
		if (connection != null) {
			connection.close();
		}

	}
}

