package tetris.businesslogic.interfaces;

import tetris.enums.TetrisBlockMovementDirection;
import tetris.model.TetrisBlockModel;
import tetris.model.TetrisMatrixModel;
import tetris.model.TetrominoModel;

public interface ICollisionDetectionService {
	boolean isTetrominoOutOfBordersOnTranslation(TetrominoModel tetromino, TetrisBlockMovementDirection movementDirection);
	boolean isTetrominoCollidingWithOtherTetrisBlocksOnTranslation(TetrisMatrixModel tetrisMatrixModel, TetrominoModel tetromino, TetrisBlockMovementDirection movementDirection);
	boolean isTetrominoOutOfBordersOnClockwiseRotation(TetrisMatrixModel tetrisMatrixModel, TetrominoModel tetromino);
	boolean isTetrominoOutOfBordersOnCounterClockwiseRotation(TetrisMatrixModel tetrisMatrixModel, TetrominoModel tetromino);
	boolean isTetrominoCollidingWithOtherTetrisBlocksOnClockwiseRotation(TetrisMatrixModel tetrisMatrixModel, TetrominoModel tetromino);
	boolean isTetrominoCollidingWithOtherTetrisBlocksOnCounterClockwiseRotation(TetrisMatrixModel tetrisMatrixModel, TetrominoModel tetromino);
	boolean isTetrominoOutOfBottomBordersOnTranslation(TetrominoModel tetromino, TetrisBlockMovementDirection movementDirection);
	boolean isTetrominoIntersectingWithOtherTetrisBlocksOnTetrisMatrixModel(TetrisMatrixModel tetrisMatrixModel, TetrisBlockModel[][] tetrisBlockModelComposition);
}