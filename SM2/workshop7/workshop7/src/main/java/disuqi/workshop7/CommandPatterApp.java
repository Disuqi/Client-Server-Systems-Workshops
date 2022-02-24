package disuqi.workshop7;

import javafx.application.Application;
import javafx.event.EventHandler;
import javafx.scene.Scene;
import javafx.scene.canvas.Canvas;
import javafx.scene.canvas.GraphicsContext;
import javafx.scene.input.KeyCode;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.scene.paint.Color;
import javafx.stage.Stage;


public class CommandPatterApp extends Application {
	Pane root;
	Scene scene;
	Canvas canvas;
	GraphicsContext gc;
	
	EventHandler<MouseEvent> mouseHandler = new EventHandler<MouseEvent>() {

		@Override
		public void handle(MouseEvent event) {
			// TODO Auto-generated method stub
			gc.strokeOval(event.getX(), event.getY(), 3, 3);
		} };

	EventHandler<KeyEvent> keyboardHandler = new EventHandler<KeyEvent>() {

		@Override
		public void handle(KeyEvent event) {

			if(event.getCode() == KeyCode.R) {
				gc.clearRect(0, 0, 600, 400);
			}	
			
			if(event.getCode() == KeyCode.G) {
				gc.setStroke(Color.GREEN);
			}		
		}};

	
	public static void main(String[] args) {
		launch(args);
	}

	@Override
	public void start(Stage primaryStage) throws Exception {
		primaryStage.setTitle("Command Pattern Drawing App");
      	root = new Pane();
      	scene = new Scene(root, 600, 400);
      	canvas = new Canvas(600, 400);
      	primaryStage.setScene(scene);
      	primaryStage.show();		
      	root.getChildren().add(canvas);
      	gc = canvas.getGraphicsContext2D();
      	gc.setStroke(Color.BLACK);
      	gc.setLineWidth(4);
      	
      	scene.setOnMouseDragged(mouseHandler);
      	
      	scene.setOnKeyPressed(keyboardHandler);
	}

}
