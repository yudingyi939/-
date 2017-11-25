//信1605-3 于丁一 20163578
package super调用;

 class Animal {
	public int age=10;
	public String name;
	public void eat(){
		System.out.println("有吃东西的能力");
	}
	public Animal(int age){
		this.age=age;
	System.out.println("构造方法执行了");
	}
	

}
 class Dog extends Animal{
	public int age=20;
	public void eat(){
		System.out.println("狗有吃骨头的能力");
		}
		public Dog(int age){
			super(age);
			System.out.println("Dog构造方法执行了");
		}
}
 public class Test {
	 public static void main(String[] args){
		 Animal a=new Animal(10);
		 a.eat();
		 Dog b=new Dog(20);
		 b.eat();
		 
	 }
	 
 }