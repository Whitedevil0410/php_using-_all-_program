import java.lang.*;

class Bank{
	float getRol(){
		return 0;
	}
}

class SBI extend Bank{
	float getRol(){
		return 7;
	}
}

class ICIC extend Bank{
	float getRol(){
		return 8;
	}
}

class HDFC extend Bank{
	float getRol(){
		return 9;
	}
}
class pra17{
	public static void main(String[] args) {
		System.out.println("------------------");
		System.out.println("PRIYANSH MASIYAVA(216090307029)");
		System.out.println("-------------------");

		Bank b;
		Bank b = new SBI();
		b.getRol();

		Bank b = new ICIC();
		b.getRol();

		Bank b = new HDFC();
		b.getRol();
	}
}