//連番くらす(Ver.2)

class Id{
	private static int counter = 0; // 何番までの識別番号をあたえたか

	private int id; 			//識別番号
	//--- コンストラクタ	---//
    public Id(){
    	id = ++counter;			//識別番号
    }
    //--- 識別番号を取得	---//
    public int getId(){
    	return id;
    }
//---最後に与えた識別番号を取得	---//
public static int getMaxId() { 
	return counter;
}

}
public class IdTester {
	public staic void main (String[] args){
		Id a = new Id();	//識別番号1番
		Id b = new Id();	//識別番号1番
		System.out.println("aの識別番号 : " + a.getId());
		System.out.println("aの識別番号 : " + b.getId());

		System.out.println("最後に与えた識別番号 =" + Id.getMaxId());
		System.out.println("最後に与えた識別番号 =" + a.getMaxId());
		System.out.println("最後に与えた識別番号 =" + b.getMaxId());

	}
}