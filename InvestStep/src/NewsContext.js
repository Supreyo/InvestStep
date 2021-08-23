import React, { createContext, useEffect, useState } from "react";
import axios from "axios";

export const NewsContext = createContext();

export const NewsContextProvider = (props) => {
    const [data,setData] = useState();

    useEffect(() => {
        axios //Using axios to get the API information //q=crypto gets crypto related news //The API key
        .get("https://newsapi.org/v2/everything?q=crypto&sortBy=popularity&apiKey=2136ece260fa4377a62fc572caa975e6")
        .then((response) => setData(response.data)) //Setting the data to the response we get from the API
        .catch((error) => console.log(error)); //Handling any errors
    }, []);

    return( //Returning the news content
        <NewsContext.Provider value={{data}}>
            {props.children}
        </NewsContext.Provider>
    )
}
 