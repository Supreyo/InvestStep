import React from "react";

function NewsArticle({ data }) {
  return ( //Returning an articles information along with the structure (Pic first, then title, then author, etc.)
    <div class="News">
      <img class="newsPic" src={data.urlToImage} width="400" height="250"/>
      <h1 class="newsTitle">{data.title}</h1>
      <span class="newsAuthor">{data.author}</span> <br />
      <span class="newsPublished">{data.publishedAt}</span>
      <p class="newsDesc">{data.description}</p>
      <span class="newsSource">{data.source.name}</span>
      <br></br><br></br><a class="newsURL" href={data.url}>Link to Article</a>
    </div>
  );
}

export default NewsArticle;