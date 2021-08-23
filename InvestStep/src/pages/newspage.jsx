import React from 'react'
import { NewsContextProvider } from "../NewsContext";
import News from "../components/News";

const newspage = () => {
    return (
        <NewsContextProvider>
            <News /> 
        </NewsContextProvider>
    )
}

export default newspage
