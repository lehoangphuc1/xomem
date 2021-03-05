//人間クラス (Ver.4)
public class Human　{
	private static int counter = 0; // 何番までの識別番号をあたえたか
	private String name;	// 名前
	private int height;	// 身長
	private int weight;	// 体重
	private int id; //識別番号
//--- コンストラクタ	---//
public Human(String name, int height, int weight) {
	this.name = name; 
	this.height = height; 
	this.weight = weight; 
	id= ++counter; 
}
public String getName() { return name;}	//	名前を取得
public int getHeight() { return height;}	// 身長を取得
public int getWeight()	{return weight; } // 体重を取得
pubLic void gainWeight(int w)	{ weight += w; }	//太る
public void reduceWeight(int w) { weight, -= w; }	//痩せる

pubLic int getId() { return id; }	// 識別番号を取得\

//--- `データ表示---//
public void putData() {
System.out.println("名前:" + name);
System.out.println("身長: " + height + "Cm");

System.out.println("体重:" + weight + "kg");
}

//人間クラス (Ver.4)の利用例

class HumanTester{
	public static void main(String[] args) {
		Human suzuki = new Human("鈴木二郎", 170, 60);
		Human tanaka = new Human("高田龍一", 166, 72);

		suzuki.putData();			//suzukiのデータを表示
		System.out.println("番号 :" +suzuki.getId());

		System.out.println();

		tanaka.putData();			//tanakaのデータを表示
		System.out.println("番号 :" +tanaka.getId());
	}
}