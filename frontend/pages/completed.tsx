import type { NextPage } from "next";
import { useRouter } from "next/dist/client/router";
import { useEffect, useState } from "react";

interface ResultData {
  personality_group_name: string;
  personality_group_message: string;
}

const Completed: NextPage = () => {
  const router = useRouter();
  const [quizResult, setQuizResult] = useState<ResultData>();

  useEffect(() => {
    const result = JSON.parse(window.localStorage.getItem("result"));

    setQuizResult(result);
  }, []);

  return (
    <div className="container">
      {quizResult ? (
        <>
          <h2>
            You are an - {quizResult.personality_group_name.toUpperCase()}!!
          </h2>

          <div className="content">{quizResult.personality_group_message}</div>

          <div className="actionButtons">
            <button className="resetQuiz" onClick={() => router.push("/")}>
              Do the test again!
            </button>
          </div>
        </>
      ) : (
        <h2>Loading</h2>
      )}
    </div>
  );
};

export default Completed;
