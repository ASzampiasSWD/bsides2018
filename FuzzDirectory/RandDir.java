import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.PrintWriter;
import java.util.Random;
import java.util.Scanner;

public class RandDir
{
	public static void main(String[] args)
	{
		ReadIT();
		System.out.println("Task Completed.");
	}
	/**
	 * ReadIT()
	 * Simple script to pick random directories from raft-medium-directories.txt.
	 * Makes a file called 1000Random.txt for random directories.
	 */
	public static void ReadIT()
	{
		try 
		{
			PrintWriter pwWrite = new PrintWriter(new File("1000Random.txt"));
			Scanner scScanner = new Scanner(new FileInputStream("raft-medium-directories.txt"));
			Random pickLine = new Random();
			String[] intArray = new String[30010];
						        //max   //min      //min (Correlates to raft.txt line count)
			int intRandom = pickLine.nextInt((30010 - 0) + 1) + 0;
			
			int i = 0;
			while (scScanner.hasNextLine())
			{
				String strLine = scScanner.nextLine();
				intArray[i] = strLine;	
				i++;
			}
			                    // change this for how many directories you want to generate.
			for (int d = 0; d < 1000; d++)
			{
				pwWrite.println(intArray[intRandom]);
				intRandom = pickLine.nextInt((30010 - 0) + 1) + 0;
			}	
			pwWrite.flush();
			pwWrite.close();
			scScanner.close();
		}
			
		catch (FileNotFoundException e)
		{
			e.printStackTrace();
		}		
	 } 	
	}
