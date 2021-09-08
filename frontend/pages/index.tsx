import type { NextPage } from "next";
import { useRouter } from "next/dist/client/router";
import { useEffect, useState } from "react";
import { api } from "../services/api";

interface AnswerData {
  id: number;
  personality_group_id: number;
  answer: string;
}

interface QuestionsData {
  id: number;
  question: string;
  answer: AnswerData[];
}

const Home: NextPage = () => {
  const router = useRouter();

  // store selected answers
  const [questionNumber, setQuestionNumber] = useState(1);
  const [selectedAnswer, setSelectedAnswer] = useState<AnswerData>();
  const [answers, setAnswers] = useState<AnswerData[]>([]);

  const [questions, setQuestions] = useState<QuestionsData[]>([]);

  // get all questions
  useEffect(() => {
    (async () => {
      const response = await api.get("questions");

      setQuestions(response.data);
    })();
  }, []);

  useEffect(() => {
    localStorage.removeItem("result");
  });

  function handleSelectAnswer(answer: AnswerData) {
    setSelectedAnswer(answer);
  }

  function handleNextQuestion() {
    if (!selectedAnswer) {
      alert("Please select one answer");
      return;
    }

    setQuestionNumber(questionNumber + 1);
    setAnswers([...answers, selectedAnswer]);
  }

  async function handleFinishQuiz() {
    const response = await api.post("/finish-quiz", {
      answers,
    });

    localStorage.setItem("result", JSON.stringify(response.data));

    router.push("completed");
  }

  return (
    <div className="container">
      {questions.length > 0 ? (
        <>
          <header>
            Questions {questionNumber} of {questions.length}
          </header>

          <h2>{questions[questionNumber - 1].question}</h2>

          <div className="answers">
            <ul>
              {questions[questionNumber - 1].answer.map((answer) => (
                <li
                  key={answer.id}
                  onClick={() => handleSelectAnswer(answer)}
                  className={
                    selectedAnswer && selectedAnswer.id === answer.id
                      ? "selected"
                      : ""
                  }
                >
                  <input
                    type="radio"
                    checked={selectedAnswer && selectedAnswer.id === answer.id}
                  />
                  <span>{answer.answer}</span>
                </li>
              ))}
            </ul>
          </div>

          <div className="actionButtons">
            {questionNumber < questions.length && (
              <button
                onClick={handleNextQuestion}
                className="nextQuestionButton"
              >
                Next
              </button>
            )}

            {questionNumber > 3 && (
              <button className="finishQuizButton" onClick={handleFinishQuiz}>
                Finish
              </button>
            )}
          </div>
        </>
      ) : (
        <h2>Loading</h2>
      )}
    </div>
  );
};

export default Home;
