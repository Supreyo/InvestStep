import React, { useContext } from "react";
import { NewsContext } from "../NewsContext";
import NewsArticle from "./NewsArticle";
import "../news.css"

function News(props) {
  const { data } = useContext(NewsContext);

  return ( //Returning all the news article along with displaying the header. Loading... will display when page is refreshed or articles take a while to load
    <div>                            
      <div className="AllNews">
        {data
          ? data.articles.map((news) => (
              <NewsArticle data={news} key={news.url} /> 
            ))
          : "Loading..."} 
      </div>
    </div>
  );
}

export default News;