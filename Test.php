//��1605-3 �ڶ�һ 20163578
package super����;

 class Animal {
	public int age=10;
	public String name;
	public void eat(){
		System.out.println("�гԶ���������");
	}
	public Animal(int age){
		this.age=age;
	System.out.println("���췽��ִ����");
	}
	

}
 class Dog extends Animal{
	public int age=20;
	public void eat(){
		System.out.println("���гԹ�ͷ������");
		}
		public Dog(int age){
			super(age);
			System.out.println("Dog���췽��ִ����");
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