public class MinMaxTester {
	public static void main(String[] args) {
		Scanner stdIn = new Scanner(System.in);
		System.out.print("xの値 :");
		int x = stdIn.nextInt();
		System.out.print("yの値 :");
		int y = stdIn.nextInt();
		System.out.print("zの値 :");
		int z = stdIn.nextInt();
		System.out.print("配列aの要素数 :");
		int num = stdIn.nextInt();
		int[] a = new int[num];

		for (int i = 0; i < num; i++) {
			System.out.print("a[" + i + "] : ");
			a[i] = stdIn.nextInt();
		}
		System.out.printf("x,yの最小値は%dです。 \n", MinMax.min(x, y));
		System.out.printf("x,yの最大値は%dです。 \n", MinMax.max(x, y));

		System.out.printf("x,y,zの最小値は%dです。 \n", MinMax.min(x, y, z));
		System.out.printf("x,y,zの最大値は%dです。 \n", MinMax.max(x, y, z));

		System.out.printf("配列aの最小値は%dです。 \n", MinMax.min(a));

		int xmin[] = MinMax.minIndexArray(a);
		System.out.print("そのインデックスは{ ");
		for (int i = 0; i < xmin.length; i++)
			System.out.print(xmin[i] + " ");
		System.out.println("}です。 ");

		System.out.printf("配列aの最大値は%dです。 \n", MinMax.max(a));
		int xmax[] = MinMax.maxIndexArray(a);
		System.out.print("そのインデックスは{ ");
		for (int i = 0; i < xmax.length; i++)
			System.out.print(xmax[i] + " ");
		System.out.println("}です。 ");
	}

}

class MinMax {

	// --- a,bの最小値を返却 ---//
	public static int min(int a, int b) {
		return a < b ? a : b;
	}

	// --- a,b,c の最小値を返却 ---//
	public static int min(int a, int b, int c) {
		int min = a;
		if (b < min)
			min = b;
		if (c < min)
			min = c;
		return min;
	}

	// --- 配列aの最小値を返却 ---//
	public static int min(int[] a) {
		int min = a[0];
		for (int i = 1; i < a.length; i++)
			if (a[i] < min)
				min = a[i];
		return min;
	}

	// --- 配列aの最小値をもつ全要素のインデックスを格納した配列を返却---//
	public static int[] minIndexArray(int[] a) {
		int min = min(a); // 最小値
		int count = 0; // 最小値をもつ要素の個数
		for (int i = 0; i < a.length; i++)
			if (a[i] == min)
				count++;
		int[] c = new int[count--];
		for (int i = a.length - 1; count >= 0; i--)
			if (a[i] == min)
				c[count--] = i;
		return c;
	}

	// --- a,bの最大値を返却 ---//
	public static int max(int a, int b) {
		return a > b ? a : b;
	}

	// --- a,b,c の最大値を返却 ---//
	public static int max(int a, int b, int c) {
		int max = a;
		if (b > max)
			max = b;
		if (c > max)
			max = c;
		return max;
	}

	// --- 配列aの最大値を返却 ---//
	public static int max(int[] a) {
		int max = a[0];
		for (int i = 1; i < a.length; i++)
			if (a[i] > max)
				max = a[i];
		return max;
	}

	public static int[] maxIndexArray(int[] a) {
		int max = max(a); // 最大値
		int count = 0; // 最大値をもつ要素の個数
		for (int i = 0; i < a.length; i++)
			if (a[i] == max)
				count++;
		int[] c = new int[count--];
		for (int i = a.length - 1; count >= 0; i--)
			if (a[i] == max)
				c[count--] = i;
		return c;
	}
}
