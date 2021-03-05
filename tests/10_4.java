//連番クラス (増分が変更できる)		
			
class ExId　{
private static int counter = 0: // 何番までの識別番号をあたえたか
private static int step = 1;	// 増分	

	
private int id;　　　			//識別番号


//--- コンストラクタ	---//
public ExId(){
	id = counter +=step ;		//識別番号
}
//--- 識別番号を取得	---//
public int getId() {
 return id;	
}
//--- 増分を取得 ---//
public static int getStep() {
	return step;
} 

//--- 増分を設定 ---//
public static int setStep(int s){
	step = (s >=1) ? s : 1;
	return step;
}

//---最後に与えた識別番号を取得	---//
public static int getMaxId() { 
	return counter;
}
}

public class ExIdTester {
	public static void main (String [] args) {
		ExId a = new ExId();     //識別番号1番
		ExId b = new ExId();	 //識別番号2番
		ExId c = new ExId();	 //識別番号3番
		ExId.setStep(4);
		ExId d = new ExId();     //識別番号7番
		ExId e = new ExId();	 //識別番号11番
		ExId f = new ExId();	 //識別番号15番

		System.out.println("aの識別番号 : =" + a.getMaxId());
		System.out.println("bの識別番号 : =" + b.getMaxId());
		System.out.println("cの識別番号 : =" + c.getMaxId());
		System.out.println("dの識別番号 : =" + d.getMaxId());
		System.out.println("eの識別番号 : =" + e.getMaxId());
		System.out.println("fの識別番号 : =" + f.getMaxId());

		int max = ExId.getMaxId();
		System.out.println("最後に与えた識別番号 : =" + max);
		System.out.println("次回に与えた識別番号 : =" + (max + ExId.getStep()));

	}
}
