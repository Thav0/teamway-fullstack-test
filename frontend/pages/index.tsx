import type { NextPage } from 'next'
import { useEffect, useState } from 'react'
import { api } from '../services/api';

interface answerData {
  id: number;
  personality_group_id: number;
}

const Home: NextPage = () => {
  
  // store selected answers
  const [selectedAnswers, setSelectedAnswers] = useState<answerData[]>([]);

  const [questions, setQuestions] = useState([]);

  // get all questions
  useEffect(() => {
    (async () => {
      const response = await api.get('questions');

      console.log(response.data);
    })()
  }, []);

  return (
    <h1>teste</h1>
  )
}

export default Home
