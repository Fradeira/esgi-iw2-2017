<?php

namespace Blog\Service;

use Blog\Entity\Post;
use Blog\Service\BlogService;

class BlogServiceImpl implements BlogService
{
  protected $postRepository;

  public function getPostRepository()
  {
      return $this->postRepository;
  }

  public function setPostRepository($postRepository)
  {
    $this->postRepository = $postRepository;
  }

  public function save(Post $post)
  {
    $this->postRepository->save($post);
  }

  public function fetchAll()
  {
    return $this->postRepository->fetchAll();
  }

  public function fetch($page)
  {
    return $this->postRepository->fetch($page);
  }

  /**
   * @return Post|null
   */
  public function find($categorySlug, $postSlug)
  {
    return $this->postRepository->find($categorySlug, $postSlug);
  }

  /**
   * @return Post|null
   */
  public function findById($postId)
  {
    return $this->postRepository->findById($postId);
  }

  public function update(Post $post)
  {
    $this->postRepository->update($post);
  }

  public function delete($postId)
  {
    $this->postRepository->delete($postId);
  }
}
